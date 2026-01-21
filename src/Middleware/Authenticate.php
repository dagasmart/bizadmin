<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($QhgV0, Closure $FD7oB) { goto YvAaU; u2fHZ: Admin::permission()->checkUserStatus(); goto ONDGY; wguP6: kVmTc: goto u2fHZ; ONDGY: return $FD7oB($QhgV0); goto tRynj; zcGPk: return Admin::response()->additional(["\143\157\x64\x65" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\141\x64\155\x69\156\x2e\160\154\x65\141\x73\x65\137\154\x6f\x67\x69\156")); goto wguP6; YvAaU: if (!Admin::permission()->authIntercept($QhgV0)) { goto kVmTc; } goto zcGPk; tRynj: } }
