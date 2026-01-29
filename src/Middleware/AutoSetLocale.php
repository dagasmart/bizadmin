<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:30              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($SOpxq, Closure $u93QA) { goto lscmb; GL7j3: return $u93QA($SOpxq); goto UX8Vs; lscmb: $PuU1L = request()->header("\x6c\157\143\141\154\x65", config("\141\160\x70\56\154\x6f\143\141\154\x65")); goto KnKlU; KnKlU: App::setLocale($PuU1L); goto GL7j3; UX8Vs: } }
