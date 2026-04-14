<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($BmpF6, Closure $RvVDs) { goto QIaZZ; QIaZZ: $bpuXy = request()->header("\x6c\x6f\143\x61\x6c\145", config("\x61\160\160\x2e\x6c\x6f\143\x61\x6c\145")); goto bbYCw; bbYCw: App::setLocale($bpuXy); goto U138u; U138u: return $RvVDs($BmpF6); goto zMJeD; zMJeD: } }
