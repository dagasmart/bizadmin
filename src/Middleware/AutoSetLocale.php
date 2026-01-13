<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($LWaOu, Closure $wSUyZ) { goto yb_Py; yb_Py: $nymrp = request()->header("\154\x6f\143\141\x6c\x65", config("\x61\160\160\56\x6c\x6f\x63\141\x6c\145")); goto cNv6_; S5RH_: return $wSUyZ($LWaOu); goto ESh2z; cNv6_: App::setLocale($nymrp); goto S5RH_; ESh2z: } }
