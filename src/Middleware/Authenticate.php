<?php

namespace DagaSmart\BizAdmin\Middleware;

use Closure;
use DagaSmart\BizAdmin\Admin;
use Illuminate\Http\Response;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if (Admin::permission()->authIntercept($request)) {
            return Admin::response()
                ->additional(['code' => Response::HTTP_UNAUTHORIZED])
                ->doNotDisplayToast()
                ->fail(admin_trans('admin.please_login'));
        }

        Admin::permission()->checkUserStatus();

        return $next($request);
    }
}
