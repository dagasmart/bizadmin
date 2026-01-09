<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:42              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($oE71v, Closure $kZY6W) { goto ux_Lg; BFGRz: App::setLocale($KAQ2S); goto uzmh9; uzmh9: return $kZY6W($oE71v); goto NIHSC; ux_Lg: $KAQ2S = request()->header("\154\157\x63\141\154\x65", config("\141\160\x70\x2e\x6c\x6f\143\x61\x6c\145")); goto BFGRz; NIHSC: } }
