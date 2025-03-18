<?php

namespace DagaSmart\BizAdmin\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class AutoSetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = request()->header('locale', config('app.locale'));
        App::setLocale($locale);
        return $next($request);
    }
}
