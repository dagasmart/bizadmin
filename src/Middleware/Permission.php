<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $GixJ3, Closure $z8_TV, ...$xtM8o) { goto xPtOI; rMa13: return $z8_TV($GixJ3); goto r1ZpJ; d8KA0: return Admin::response()->fail(admin_trans("\x61\144\x6d\x69\x6e\x2e\x75\156\141\165\x74\150\x6f\x72\151\x7a\145\x64")); goto XVi7g; xPtOI: if (!Admin::permission()->permissionIntercept($GixJ3, $xtM8o)) { goto Nl_Jk; } goto d8KA0; XVi7g: Nl_Jk: goto rMa13; r1ZpJ: } }
