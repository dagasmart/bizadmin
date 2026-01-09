<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:42              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $oE71v, Closure $kZY6W, ...$Fmlzh) { goto mD6if; uEKw0: return Admin::response()->fail(admin_trans("\x61\x64\155\x69\156\56\x75\x6e\141\165\164\150\157\162\x69\x7a\145\144")); goto R51_z; mD6if: if (!Admin::permission()->permissionIntercept($oE71v, $Fmlzh)) { goto rQtBn; } goto uEKw0; R51_z: rQtBn: goto DQ42j; DQ42j: return $kZY6W($oE71v); goto mNvwj; mNvwj: } }
