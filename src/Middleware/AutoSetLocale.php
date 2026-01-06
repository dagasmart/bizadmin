<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($CLnJo, Closure $oGGOT) { goto VBlXH; VBlXH: $jVzIX = request()->header("\x6c\157\143\x61\154\145", config("\141\x70\160\x2e\154\157\x63\141\154\145")); goto ZrX9T; XPpv3: return $oGGOT($CLnJo); goto uwcbZ; ZrX9T: App::setLocale($jVzIX); goto XPpv3; uwcbZ: } }
