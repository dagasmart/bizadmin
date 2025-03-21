<?php

namespace Slowlyo\OwlAdmin\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Slowlyo\OwlAdmin\Models\BaseModel as Model;

/**
 * 省市区数据模型
 */
class BasicRegion extends Model
{
    use SoftDeletes;
    protected $table = 'basic_region';

}
