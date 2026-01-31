<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:01              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($zcagP, Closure $Y7Rgl) { goto CpwU6; dbXO8: return $Y7Rgl($zcagP); goto gnVOV; CpwU6: $qlMNX = request()->header("\x6c\157\x63\141\x6c\145", config("\141\x70\160\x2e\154\157\x63\x61\154\x65")); goto gK5Il; gK5Il: App::setLocale($qlMNX); goto dbXO8; gnVOV: } }
