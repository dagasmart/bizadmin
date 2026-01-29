<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:22              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($BmpF6, Closure $RvVDs) { goto tq5F9; rjK1Q: return $RvVDs($BmpF6); goto mRfc8; tq5F9: $bpuXy = request()->header("\154\157\143\x61\154\145", config("\x61\160\x70\x2e\154\157\143\141\154\x65")); goto c2zhj; c2zhj: App::setLocale($bpuXy); goto rjK1Q; mRfc8: } }
