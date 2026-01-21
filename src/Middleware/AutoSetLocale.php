<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($QhgV0, Closure $FD7oB) { goto dmD_o; dmD_o: $SzFWt = request()->header("\154\x6f\143\x61\154\145", config("\141\160\x70\x2e\154\157\143\x61\154\x65")); goto ix3ki; g82B9: return $FD7oB($QhgV0); goto mJ0I_; ix3ki: App::setLocale($SzFWt); goto g82B9; mJ0I_: } }
