<?php

namespace DagaSmart\BizAdmin\Services;

use Illuminate\Support\Arr;
use DagaSmart\BizAdmin\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use DagaSmart\BizAdmin\Models\SystemSoft;

class SystemSoftService extends AdminService
{
    protected string $modelName = SystemSoft::class;

    public function list()
    {
        if($soft_auth = $this->request['soft_auth']){
            unset($this->request['soft_auth']);
        }
        if($soft_status = $this->request['soft_status']){
            unset($this->request['soft_status']);
        }
        return $this->listQuery()
            ->when(!is_null($soft_auth), function ($query)use($soft_auth){
                $query->whereIn('soft_auth', explode(',', $soft_auth));
            })
            ->when(!is_null($soft_status), function ($query)use($soft_status){
                $query->whereIn('soft_status', explode(',', $soft_status));
            })
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
