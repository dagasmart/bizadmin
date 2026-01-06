<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($nM8iW, Closure $D4QGv) { goto D8MoD; ldaYT: Admin::permission()->checkUserStatus(); goto cQoo9; CRw3L: uo98N: goto ldaYT; KmCBn: return Admin::response()->additional(["\x63\x6f\144\x65" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\141\x64\155\151\156\x2e\160\154\x65\x61\163\145\137\154\x6f\147\x69\156")); goto CRw3L; cQoo9: return $D4QGv($nM8iW); goto Hxw6v; D8MoD: if (!Admin::permission()->authIntercept($nM8iW)) { goto uo98N; } goto KmCBn; Hxw6v: } }
