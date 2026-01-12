<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:58              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($dCPl0, Closure $b8Qpg) { goto Td44k; Td44k: if (!Admin::permission()->authIntercept($dCPl0)) { goto E2gEu; } goto KFIBJ; KFIBJ: return Admin::response()->additional(["\143\157\144\145" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\x61\x64\155\151\156\56\160\x6c\x65\141\163\x65\137\154\157\x67\x69\x6e")); goto UbR85; LY5Xa: Admin::permission()->checkUserStatus(); goto VcZc0; VcZc0: return $b8Qpg($dCPl0); goto AGf1Z; UbR85: E2gEu: goto LY5Xa; AGf1Z: } }
