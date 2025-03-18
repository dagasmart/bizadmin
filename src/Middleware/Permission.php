<?php

namespace DagaSmart\BizAdmin\Middleware;

use Closure;
use DagaSmart\BizAdmin\Admin;
use Illuminate\Http\Request;

class Permission
{
    public function handle(Request $request, Closure $next, ...$args)
    {
        if (Admin::permission()->permissionIntercept($request, $args)) {
            return Admin::response()->fail(admin_trans('admin.unauthorized'));
        }

        return $next($request);
    }
}
