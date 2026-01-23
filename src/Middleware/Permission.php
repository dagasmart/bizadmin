<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $xMi5L, Closure $n9V3Y, ...$bDu8f) { goto rGXBd; Xa7xr: BQm8T: goto rIW8W; rGXBd: if (!Admin::permission()->permissionIntercept($xMi5L, $bDu8f)) { goto BQm8T; } goto YF7Os; rIW8W: return $n9V3Y($xMi5L); goto k6UKz; YF7Os: return Admin::response()->fail(admin_trans("\x61\144\x6d\x69\x6e\x2e\165\156\x61\165\164\150\157\162\151\x7a\x65\144")); goto Xa7xr; k6UKz: } }
