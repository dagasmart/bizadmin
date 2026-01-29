<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($uHfXz, Closure $H6mDO) { goto PB41L; PB41L: $y3E4V = request()->header("\x6c\x6f\x63\x61\154\145", config("\141\x70\x70\x2e\x6c\x6f\143\x61\x6c\x65")); goto Yazdp; Syny7: return $H6mDO($uHfXz); goto cDve0; Yazdp: App::setLocale($y3E4V); goto Syny7; cDve0: } }
