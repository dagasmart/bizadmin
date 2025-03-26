<?php

namespace DagaSmart\BizAdmin\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use DagaSmart\BizAdmin\Models\BaseModel as Model;

/**
 * 省市区数据模型
 */
class BasicRegion extends Model
{
    use SoftDeletes;
    protected $table = 'basic_region';

}
