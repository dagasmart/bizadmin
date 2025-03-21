<?php

namespace DagaSmart\BizAdmin\Models;

class AdminSetting extends BaseModel
{
    protected $table = 'admin_settings';

    protected $primaryKey = 'key';

    protected $guarded = [];

    protected $casts = [
        'values' => 'json',
    ];

    protected function asJson($value, $flag = true)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
