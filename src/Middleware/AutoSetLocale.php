<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($nM8iW, Closure $D4QGv) { goto j09wO; RZkl0: App::setLocale($u1j82); goto ZZ32r; j09wO: $u1j82 = request()->header("\154\157\143\141\x6c\145", config("\x61\160\160\56\x6c\157\x63\141\x6c\145")); goto RZkl0; ZZ32r: return $D4QGv($nM8iW); goto PGfE0; PGfE0: } }
