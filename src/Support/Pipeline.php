<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Support\Traits\Conditionable; class Pipeline extends \Illuminate\Pipeline\Pipeline { use Conditionable; public static function handle($rezW6) { return app(self::class)->send($rezW6); } }
