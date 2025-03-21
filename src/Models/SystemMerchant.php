<?php

namespace DagaSmart\BizAdmin\Models;

use App\Libs\Common;
use DagaSmart\BizAdmin\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemMerchant extends BaseModel
{
    use Common, SoftDeletes;

    protected $table = 'system_merchant';

    protected $primaryKey = 'id';


    /**
     * 授权
     * @return mixed
     */
    public function authOption()
    {
        return [1=>'免费', 2=>'付费', 3=>'兑换'];
    }

    /**
     * 状态
     * @return mixed
     */
    public function statusOption()
    {
        return [0=>'待审核', 1=>'受理中', 2=>'上线交易', -1=>'下线维护'];
    }


}
