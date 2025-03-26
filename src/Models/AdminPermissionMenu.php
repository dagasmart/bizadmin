<?php

namespace DagaSmart\BizAdmin\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminPermissionMenu extends BaseModel
{
    use SoftDeletes;

    protected $table = 'admin_permission_menu';


}
