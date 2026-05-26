<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($BmpF6, Closure $RvVDs) { goto ms2tu; h2ebx: return $RvVDs($BmpF6); goto qq3nf; jWZ9s: App::setLocale($bpuXy); goto h2ebx; ms2tu: $bpuXy = request()->header("\154\157\143\x61\154\x65", config("\141\x70\x70\x2e\x6c\157\x63\141\x6c\x65")); goto jWZ9s; qq3nf: } }
