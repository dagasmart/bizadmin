<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($GixJ3, Closure $z8_TV) { goto Fr0tP; jQfEJ: Admin::permission()->checkUserStatus(); goto uHx5r; hFqYK: Y1_IE: goto jQfEJ; uHx5r: return $z8_TV($GixJ3); goto jRPU9; yBXq9: return Admin::response()->additional(["\x63\157\144\145" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\x61\144\155\x69\x6e\x2e\160\154\x65\141\163\145\137\x6c\x6f\x67\x69\x6e")); goto hFqYK; Fr0tP: if (!Admin::permission()->authIntercept($GixJ3)) { goto Y1_IE; } goto yBXq9; jRPU9: } }
