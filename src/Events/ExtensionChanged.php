<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Events; use Illuminate\Foundation\Events\Dispatchable; class ExtensionChanged { use Dispatchable; public function __construct(public string $nZRUA, public string $UInRk) { } }
