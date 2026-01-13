<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($LWaOu, Closure $wSUyZ) { goto rSlhu; rSlhu: if (!Admin::permission()->authIntercept($LWaOu)) { goto RJHmL; } goto uk1un; YYGHL: return $wSUyZ($LWaOu); goto SxbQi; uk1un: return Admin::response()->additional(["\143\157\144\x65" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\x61\x64\x6d\x69\x6e\x2e\160\x6c\145\x61\163\x65\x5f\154\157\x67\151\156")); goto hpPBI; hpPBI: RJHmL: goto ggHWo; ggHWo: Admin::permission()->checkUserStatus(); goto YYGHL; SxbQi: } }
