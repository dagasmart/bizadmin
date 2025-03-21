<?php

namespace DagaSmart\BizAdmin\Services;

use Illuminate\Support\Arr;
use DagaSmart\BizAdmin\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use DagaSmart\BizAdmin\Models\SystemMerchant;

class SystemMerchantService extends AdminService
{
    protected string $modelName = SystemMerchant::class;

    public function list()
    {
        return $this->listQuery()
            ->paginate(request('perPage', 20));
    }

    public function authOption()
    {
        return $this->getModel()->authOption();
    }

    public function statusOption()
    {
        return $this->getModel()->statusOption();
    }

}
