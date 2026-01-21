<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($XqjI9, Closure $y23dY) { goto eyVDq; bKId6: Admin::permission()->checkUserStatus(); goto Ab2JM; PS6lO: xqI5p: goto bKId6; eyVDq: if (!Admin::permission()->authIntercept($XqjI9)) { goto xqI5p; } goto FoHHo; FoHHo: return Admin::response()->additional(["\x63\157\x64\145" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\141\144\155\151\x6e\56\160\x6c\145\141\x73\145\x5f\154\157\x67\151\x6e")); goto PS6lO; Ab2JM: return $y23dY($XqjI9); goto LPZCZ; LPZCZ: } }
