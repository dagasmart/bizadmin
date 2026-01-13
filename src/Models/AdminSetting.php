<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; class AdminSetting extends BaseModel { protected $table = "\x61\x64\155\x69\156\137\163\145\164\x74\x69\x6e\147\163"; protected $primaryKey = "\x69\x64"; protected $guarded = array(); protected $casts = array("\x76\x61\x6c\x75\x65\x73" => "\152\x73\157\x6e"); protected function asJson($JqsAq, $d_1ai = true) { return json_encode($JqsAq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); } }
