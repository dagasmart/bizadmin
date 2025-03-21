<?php

namespace Slowlyo\OwlAdmin\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Slowlyo\OwlAdmin\Models\BaseModel as Model;

/**
 * 数据字典模型
 */
class BasicDict extends Model
{
    use SoftDeletes;
    protected $table = 'basic_dict';

}
