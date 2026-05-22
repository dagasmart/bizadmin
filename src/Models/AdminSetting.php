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
 namespace DagaSmart\BizAdmin\Models; class AdminSetting extends BaseModel { protected $table = "\x61\144\x6d\151\156\137\x73\x65\x74\x74\151\x6e\147\x73"; protected $primaryKey = "\x69\144"; protected $guarded = array(); protected $casts = array("\x76\x61\154\x75\145\x73" => "\152\x73\x6f\156"); protected function asJson($msRQo, $k0FZi = true) { return json_encode($msRQo, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); } }
