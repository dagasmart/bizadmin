<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Traits\CommonTrait; class SystemSoftLog extends BaseModel { use CommonTrait, SoftDeletes; protected $table = "\x73\x79\x73\164\x65\x6d\x5f\x73\157\x66\x74\137\x6c\157\147"; protected $primaryKey = "\x69\x64"; }
