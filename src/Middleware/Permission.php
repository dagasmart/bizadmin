<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:30              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $SOpxq, Closure $u93QA, ...$UeTHX) { goto BHSdr; BHSdr: if (!Admin::permission()->permissionIntercept($SOpxq, $UeTHX)) { goto PtcQr; } goto Iefrn; GzyyE: PtcQr: goto Hffz1; Iefrn: return Admin::response()->fail(admin_trans("\141\144\x6d\151\156\x2e\x75\x6e\141\165\x74\x68\157\162\151\x7a\145\x64")); goto GzyyE; Hffz1: return $u93QA($SOpxq); goto aU7pR; aU7pR: } }
