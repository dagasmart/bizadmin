<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $LWaOu, Closure $wSUyZ, ...$RWJXL) { goto kXXtW; KjKCH: return Admin::response()->fail(admin_trans("\x61\x64\155\151\156\x2e\165\156\x61\x75\x74\x68\157\x72\151\x7a\x65\x64")); goto h5TX1; kXXtW: if (!Admin::permission()->permissionIntercept($LWaOu, $RWJXL)) { goto W6A3l; } goto KjKCH; fasSy: return $wSUyZ($LWaOu); goto dHnxp; h5TX1: W6A3l: goto fasSy; dHnxp: } }
