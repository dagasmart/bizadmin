<?php

namespace DagaSmart\BizAdmin\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminRolePermissions extends BaseModel
{
    use SoftDeletes;

    protected $table = 'admin_role_permissions';


}
