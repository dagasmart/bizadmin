<?php

namespace DagaSmart\BizAdmin\Middleware;

use Illuminate\Routing\Pipeline;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class EnsureFrontendRequestsAreStateful
{
    /**
     * Handle the incoming requests.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  callable  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        $this->configureSecureCookieSessions();

        return (new Pipeline(app()))->send($request)->through(static::fromFrontend($request) ? [
            function ($request, $next) {
                $request->attributes->set('sanctum', true);

                return $next($request);
            },
            config('sanctum.middleware.encrypt_cookies', \Illuminate\Cookie\Middleware\EncryptCookies::class),
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
        ] : [])->then(function ($request) use ($next) {
            return $next($request);
        });
    }

    /**
     * Configure secure cookie sessions.
     *
     * @return void
     */
    protected function configureSecureCookieSessions()
    {
        config([
            'session.http_only' => true,
            'session.same_site' => 'lax',
        ]);
    }

    /**
     * Determine if the given request is from the first-party application frontend.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    public static function fromFrontend($request)
    {
        $domain = $request->headers->get('referer') ?: $request->headers->get('origin');

        if (is_null($domain)) {
            return false;
        }

        $domain = Str::replaceFirst('https://', '', $domain);
        $domain = Str::replaceFirst('http://', '', $domain);
        $domain = Str::endsWith($domain, '/') ? $domain : "{$domain}/";

        $stateful = array_filter(config('sanctum.stateful', []));

        return Str::is(Collection::make($stateful)->map(fn($uri) => trim($uri).'/*')->all(), $domain);
    }
}
