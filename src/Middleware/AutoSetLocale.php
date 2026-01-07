<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($GArNY, Closure $G2vIO) { goto Np0Mo; Np0Mo: $Kdg7y = request()->header("\x6c\x6f\x63\141\154\x65", config("\x61\160\160\56\x6c\x6f\143\141\x6c\x65")); goto J0xMZ; FEMUg: return $G2vIO($GArNY); goto GIaWN; J0xMZ: App::setLocale($Kdg7y); goto FEMUg; GIaWN: } }
