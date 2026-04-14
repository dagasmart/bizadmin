<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 use Illuminate\Database\Migrations\Migration; return new class extends Migration { public function up() : void { \DagaSmart\BizAdmin\Support\Cores\Database::make()->up(); } public function down() : void { \DagaSmart\BizAdmin\Support\Cores\Database::make()->down(); } };
