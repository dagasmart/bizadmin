<?php

namespace DagaSmart\BizAdmin\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemMerchant extends BaseModel
{
    use SoftDeletes;

    protected $table = 'system_merchant';

    protected $primaryKey = 'id';


}
