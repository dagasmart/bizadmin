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
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class CheckModuleAccess { public function handle($nM8iW, Closure $D4QGv) { Admin::module()->checkAuthorize(); return $D4QGv($nM8iW); } }
