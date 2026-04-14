<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($BmpF6, Closure $RvVDs) { goto gv37J; nmdnd: zpcfT: goto kkFoG; TJT4H: return Admin::response()->additional(["\x63\157\x64\x65" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\141\x64\155\151\156\56\160\x6c\145\x61\x73\145\137\154\157\147\x69\156")); goto nmdnd; kkFoG: Admin::permission()->checkUserStatus(); goto vvNQx; vvNQx: return $RvVDs($BmpF6); goto ds3pJ; gv37J: if (!Admin::permission()->authIntercept($BmpF6)) { goto zpcfT; } goto TJT4H; ds3pJ: } }
