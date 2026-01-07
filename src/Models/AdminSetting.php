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
 namespace DagaSmart\BizAdmin\Models; class AdminSetting extends BaseModel { protected $table = "\x61\144\155\151\x6e\x5f\163\x65\x74\x74\x69\156\x67\163"; protected $primaryKey = "\151\144"; protected $guarded = array(); protected $casts = array("\x76\141\x6c\165\145\163" => "\152\163\x6f\156"); protected function asJson($w0aoq, $WwS9Z = true) { return json_encode($w0aoq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); } }
