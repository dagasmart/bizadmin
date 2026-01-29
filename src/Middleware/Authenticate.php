<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:30              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($SOpxq, Closure $u93QA) { goto Keu39; caxSL: fHzOa: goto TdFn8; r6Qtd: return $u93QA($SOpxq); goto pstdP; Keu39: if (!Admin::permission()->authIntercept($SOpxq)) { goto fHzOa; } goto s_9tj; s_9tj: return Admin::response()->additional(["\143\157\x64\145" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\x61\x64\x6d\x69\156\x2e\160\x6c\145\141\x73\x65\137\154\157\147\x69\156")); goto caxSL; TdFn8: Admin::permission()->checkUserStatus(); goto r6Qtd; pstdP: } }
