<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($kH3yn, Closure $gd30M) { goto PMdNm; mh5rw: Admin::permission()->checkUserStatus(); goto PiIMP; PiIMP: return $gd30M($kH3yn); goto mTDS4; nm1iw: return Admin::response()->additional(["\x63\x6f\144\x65" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\141\144\x6d\x69\156\x2e\160\x6c\x65\141\x73\145\137\154\157\x67\151\156")); goto w99U9; w99U9: GQJD3: goto mh5rw; PMdNm: if (!Admin::permission()->authIntercept($kH3yn)) { goto GQJD3; } goto nm1iw; mTDS4: } }
