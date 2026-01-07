<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($xkn1w, Closure $CUq52) { goto hhfef; M9reF: App::setLocale($sHuhR); goto ZWz08; hhfef: $sHuhR = request()->header("\x6c\157\x63\x61\154\145", config("\x61\x70\x70\x2e\154\157\x63\x61\x6c\x65")); goto M9reF; ZWz08: return $CUq52($xkn1w); goto rYCBA; rYCBA: } }
