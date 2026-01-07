<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Support\Traits\Conditionable; class Pipeline extends \Illuminate\Pipeline\Pipeline { use Conditionable; public static function handle($i2pje) { return app(self::class)->send($i2pje); } }
