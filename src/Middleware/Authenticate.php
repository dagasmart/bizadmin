<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($uHfXz, Closure $H6mDO) { goto rrCEF; lj_jM: Admin::permission()->checkUserStatus(); goto wgmaU; kpcR_: return Admin::response()->additional(["\x63\x6f\x64\145" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\x61\144\155\151\156\56\x70\x6c\x65\141\x73\145\137\x6c\157\147\151\156")); goto PAjgt; wgmaU: return $H6mDO($uHfXz); goto Y_dMt; rrCEF: if (!Admin::permission()->authIntercept($uHfXz)) { goto rTVGa; } goto kpcR_; PAjgt: rTVGa: goto lj_jM; Y_dMt: } }
