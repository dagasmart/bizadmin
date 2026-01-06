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
 namespace DagaSmart\BizAdmin\Models; class AdminSetting extends BaseModel { protected $table = "\x61\144\155\x69\x6e\x5f\x73\x65\164\164\151\156\x67\163"; protected $primaryKey = "\151\144"; protected $guarded = array(); protected $casts = array("\x76\141\x6c\165\x65\x73" => "\152\163\157\156"); protected function asJson($AHvXX, $CWUjt = true) { return json_encode($AHvXX, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); } }
