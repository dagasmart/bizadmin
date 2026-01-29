<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $uHfXz, Closure $H6mDO, ...$ci_Ea) { goto sblEF; BY6Id: RGK2A: goto ewl62; cpS3O: return Admin::response()->fail(admin_trans("\x61\144\155\x69\x6e\56\165\156\141\x75\164\x68\x6f\x72\x69\x7a\145\x64")); goto BY6Id; sblEF: if (!Admin::permission()->permissionIntercept($uHfXz, $ci_Ea)) { goto RGK2A; } goto cpS3O; ewl62: return $H6mDO($uHfXz); goto XZ1rp; XZ1rp: } }
