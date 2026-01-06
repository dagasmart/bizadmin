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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Traits\CommonTrait; class SystemSoftLog extends BaseModel { use CommonTrait, SoftDeletes; protected $table = "\x73\x79\x73\x74\x65\x6d\137\163\157\x66\164\x5f\x6c\x6f\x67"; protected $primaryKey = "\151\x64"; }
