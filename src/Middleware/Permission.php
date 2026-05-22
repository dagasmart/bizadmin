<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $BmpF6, Closure $RvVDs, ...$t3cKA) { goto gD1zz; tmNMq: return Admin::response()->fail(admin_trans("\x61\144\x6d\151\x6e\x2e\x75\156\x61\165\x74\x68\x6f\x72\151\172\145\x64")); goto avoik; avoik: XDPAv: goto sQXHf; gD1zz: if (!Admin::permission()->permissionIntercept($BmpF6, $t3cKA)) { goto XDPAv; } goto tmNMq; sQXHf: return $RvVDs($BmpF6); goto gKAYu; gKAYu: } }
