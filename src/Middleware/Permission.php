<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:22              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $BmpF6, Closure $RvVDs, ...$t3cKA) { goto FvACH; qgSNN: return $RvVDs($BmpF6); goto vDKfW; JGdXR: CN7aU: goto qgSNN; J6ITE: return Admin::response()->fail(admin_trans("\141\x64\155\151\x6e\56\165\156\141\x75\x74\x68\157\162\x69\172\x65\x64")); goto JGdXR; FvACH: if (!Admin::permission()->permissionIntercept($BmpF6, $t3cKA)) { goto CN7aU; } goto J6ITE; vDKfW: } }
