<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $BmpF6, Closure $RvVDs, ...$t3cKA) { goto s3kRV; lD2x9: return $RvVDs($BmpF6); goto aEC8e; s3kRV: if (!Admin::permission()->permissionIntercept($BmpF6, $t3cKA)) { goto pbkxr; } goto nq6TS; nq6TS: return Admin::response()->fail(admin_trans("\x61\x64\x6d\151\x6e\56\x75\156\141\x75\x74\150\157\x72\x69\172\x65\x64")); goto Lriqe; Lriqe: pbkxr: goto lD2x9; aEC8e: } }
