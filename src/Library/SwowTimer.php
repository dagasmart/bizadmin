<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 declare (strict_types=1); namespace App\Library; class SwowTimer { public static function once(float $XhMqD, callable $Jv621) : int { return EventLoop::getInstance()->delay($XhMqD, $Jv621); } public static function loop(float $p4bVz, callable $Jv621) : int { return EventLoop::get()->repeat($p4bVz, $Jv621); } public static function cancel(int $fABL1) : void { EventLoop::get()->cancel($fABL1); } public static function start() : void { EventLoop::get()->run(); } }
