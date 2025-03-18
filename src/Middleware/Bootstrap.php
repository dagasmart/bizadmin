<?php

namespace DagaSmart\BizAdmin\Middleware;

use Closure;
use DagaSmart\BizAdmin\Admin;
use Illuminate\Http\Request;

class Bootstrap
{
    public function handle(Request $request, Closure $next)
    {
        Admin::bootstrap();

        return $next($request);
    }
}
