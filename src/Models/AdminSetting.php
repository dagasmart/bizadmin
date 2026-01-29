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
 namespace DagaSmart\BizAdmin\Models; class AdminSetting extends BaseModel { protected $table = "\141\x64\x6d\x69\x6e\x5f\163\x65\164\164\151\156\x67\x73"; protected $primaryKey = "\151\x64"; protected $guarded = array(); protected $casts = array("\166\141\x6c\165\x65\163" => "\x6a\x73\x6f\x6e"); protected function asJson($PfrF0, $uWD71 = true) { return json_encode($PfrF0, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); } }
