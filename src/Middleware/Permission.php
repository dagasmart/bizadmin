<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $XqjI9, Closure $y23dY, ...$onkqj) { goto fjUD6; tVS2m: return Admin::response()->fail(admin_trans("\141\144\x6d\x69\x6e\56\x75\x6e\x61\165\x74\x68\157\x72\151\172\x65\144")); goto E9mw2; E9mw2: q7_u2: goto JuQK3; JuQK3: return $y23dY($XqjI9); goto f4cxp; fjUD6: if (!Admin::permission()->permissionIntercept($XqjI9, $onkqj)) { goto q7_u2; } goto tVS2m; f4cxp: } }
