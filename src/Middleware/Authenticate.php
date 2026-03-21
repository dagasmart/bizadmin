<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:28              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($LiCd2, Closure $aMp88) { goto gVJmG; A9M6h: return $aMp88($LiCd2); goto GbX1d; m2kET: Admin::permission()->checkUserStatus(); goto A9M6h; wiTjU: Jh9z0: goto m2kET; gVJmG: if (!Admin::permission()->authIntercept($LiCd2)) { goto Jh9z0; } goto QO_lI; QO_lI: return Admin::response()->additional(["\x63\157\144\x65" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\x61\x64\155\x69\156\56\160\x6c\145\x61\163\145\137\x6c\x6f\x67\x69\156")); goto wiTjU; GbX1d: } }
