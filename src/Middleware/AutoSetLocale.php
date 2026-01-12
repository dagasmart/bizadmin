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
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($GixJ3, Closure $z8_TV) { goto kgo60; kgo60: $wI4ng = request()->header("\154\x6f\143\x61\154\x65", config("\141\x70\160\x2e\x6c\x6f\143\141\x6c\145")); goto hP4_I; PtJcD: return $z8_TV($GixJ3); goto WK4Vq; hP4_I: App::setLocale($wI4ng); goto PtJcD; WK4Vq: } }
