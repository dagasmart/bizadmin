<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $BmpF6, Closure $RvVDs, ...$t3cKA) { goto V1Co9; Q4n5f: return $RvVDs($BmpF6); goto J1Ct3; xz9IN: return Admin::response()->fail(admin_trans("\141\144\x6d\151\156\56\165\156\141\x75\164\150\157\x72\151\x7a\145\x64")); goto EHMdc; V1Co9: if (!Admin::permission()->permissionIntercept($BmpF6, $t3cKA)) { goto M3PWF; } goto xz9IN; EHMdc: M3PWF: goto Q4n5f; J1Ct3: } }
