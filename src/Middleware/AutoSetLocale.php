<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($xMi5L, Closure $n9V3Y) { goto zpkb1; zpkb1: $eP6G9 = request()->header("\x6c\x6f\143\x61\x6c\x65", config("\141\x70\x70\56\x6c\x6f\143\x61\x6c\145")); goto dAM8F; R5SnP: return $n9V3Y($xMi5L); goto yTKj4; dAM8F: App::setLocale($eP6G9); goto R5SnP; yTKj4: } }
