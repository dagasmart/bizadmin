<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $xkn1w, Closure $CUq52, ...$Dz5AX) { goto MY89I; KH8yp: H2lMd: goto AJhvg; gR5Ib: return Admin::response()->fail(admin_trans("\141\x64\155\x69\x6e\x2e\x75\x6e\x61\x75\x74\150\x6f\162\x69\x7a\145\144")); goto KH8yp; AJhvg: return $CUq52($xkn1w); goto IJ0Uj; MY89I: if (!Admin::permission()->permissionIntercept($xkn1w, $Dz5AX)) { goto H2lMd; } goto gR5Ib; IJ0Uj: } }
