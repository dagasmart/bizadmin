<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:22              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($BmpF6, Closure $RvVDs) { goto YeRNf; s8pNe: LPAT8: goto SEmgr; SEmgr: Admin::permission()->checkUserStatus(); goto tDvvG; YeRNf: if (!Admin::permission()->authIntercept($BmpF6)) { goto LPAT8; } goto ywDry; tDvvG: return $RvVDs($BmpF6); goto YNMPE; ywDry: return Admin::response()->additional(["\x63\x6f\x64\x65" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\141\x64\x6d\151\156\56\160\154\145\141\163\145\137\154\x6f\147\151\x6e")); goto s8pNe; YNMPE: } }
