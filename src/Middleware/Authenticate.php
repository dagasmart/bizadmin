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
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($oE71v, Closure $kZY6W) { goto iyPnb; T8u1m: MJYxt: goto iWiJa; iWiJa: Admin::permission()->checkUserStatus(); goto ka8Dp; FMDEW: return Admin::response()->additional(["\x63\157\x64\145" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\x61\144\x6d\x69\x6e\56\x70\154\145\x61\x73\145\137\x6c\x6f\x67\x69\156")); goto T8u1m; ka8Dp: return $kZY6W($oE71v); goto lX2K1; iyPnb: if (!Admin::permission()->authIntercept($oE71v)) { goto MJYxt; } goto FMDEW; lX2K1: } }
