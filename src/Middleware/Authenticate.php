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
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($xkn1w, Closure $CUq52) { goto ecfYm; ecfYm: if (!Admin::permission()->authIntercept($xkn1w)) { goto rQPu0; } goto Rz0L1; Rz0L1: return Admin::response()->additional(["\143\157\144\x65" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\x61\x64\155\x69\x6e\x2e\x70\154\145\x61\x73\x65\137\x6c\x6f\x67\x69\156")); goto H222T; a5Uci: Admin::permission()->checkUserStatus(); goto ZesE5; ZesE5: return $CUq52($xkn1w); goto D82be; H222T: rQPu0: goto a5Uci; D82be: } }
