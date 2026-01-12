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
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($dCPl0, Closure $b8Qpg) { goto q0yzY; q0yzY: $gQESX = request()->header("\x6c\x6f\143\x61\154\x65", config("\x61\x70\160\56\x6c\157\143\x61\x6c\x65")); goto tYNAx; tYNAx: App::setLocale($gQESX); goto ImTrn; ImTrn: return $b8Qpg($dCPl0); goto EmPeJ; EmPeJ: } }
