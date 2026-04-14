<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; class AdminSetting extends BaseModel { protected $table = "\141\144\155\151\156\137\x73\x65\x74\164\151\156\147\x73"; protected $primaryKey = "\x69\x64"; protected $guarded = array(); protected $casts = array("\166\x61\154\x75\x65\163" => "\x6a\x73\x6f\156"); protected function asJson($msRQo, $k0FZi = true) { return json_encode($msRQo, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); } }
