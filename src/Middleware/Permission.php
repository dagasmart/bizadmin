<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:01              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $zcagP, Closure $Y7Rgl, ...$PA_Jd) { goto yh4Of; VbCsR: return $Y7Rgl($zcagP); goto Ee1tS; yh4Of: if (!Admin::permission()->permissionIntercept($zcagP, $PA_Jd)) { goto Bkolt; } goto rE6Gk; Xv2EE: Bkolt: goto VbCsR; rE6Gk: return Admin::response()->fail(admin_trans("\141\x64\155\x69\156\56\165\156\x61\165\164\150\x6f\x72\151\x7a\x65\x64")); goto Xv2EE; Ee1tS: } }
