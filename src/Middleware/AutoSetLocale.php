<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($BmpF6, Closure $RvVDs) { goto ey3Bt; T1Ukm: App::setLocale($bpuXy); goto qZoi1; ey3Bt: $bpuXy = request()->header("\154\x6f\x63\x61\x6c\x65", config("\141\160\160\56\x6c\157\x63\141\x6c\x65")); goto T1Ukm; qZoi1: return $RvVDs($BmpF6); goto BXofi; BXofi: } }
