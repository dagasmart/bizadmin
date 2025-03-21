<?php

namespace DagaSmart\BizAdmin\Services;

use DagaSmart\BizAdmin\Admin;
use DagaSmart\BizAdmin\Models\SystemMessage;

/**
 * 系统消息表
 *
 * @method SystemMessage getModel()
 * @method SystemMessage|\Illuminate\Database\Query\Builder query()
 */
class SystemMessageService extends AdminService
{
    protected string $modelName = SystemMessage::class;


    /**
     * 消息类型
     * @return array
     */
    public function typeOptions()
    {
        return $this->getModel()->typeOptions();
    }

    /**
     * 用户 options
     * @return array
     */
    public function mapping($type=null)
    {
        if($type == 'private'){
            return Admin::adminUserModel()::query()
                ->when(admin_user()->mer_id, function($query){
                    $query->where('mer_id', admin_user()->mer_id);
                })
                ->where('enabled',1)
                ->where('id','!=',admin_user()->id)
                ->select('id as value', 'username as name')
                ->selectRaw("concat(name,'‹',username,'›') as label")
                ->get()
                ->toArray();
        }
        if($type == 'system'){
            return [['value'=>0,'label'=>'所有人‹all›','name'=>'all']];
        }
        if($type == 'group'){
            return Admin::adminRoleModel()::query()
                ->when(admin_user()->mer_id, function($query){
                    $query->where('mer_id', admin_user()->mer_id);
                })
                ->select('id as value', 'slug as name')
                ->selectRaw("concat(name,'‹',slug,'›') as label")
                ->get()
                ->toArray();
        }
        if($type == 'department'){
            return Admin::adminUserModel()::query()
                ->when(admin_user()->mer_id, function($query){
                    $query->where('mer_id', admin_user()->mer_id);
                })
                ->where('enabled',1)
                ->where('id','!=', admin_user()->id)
                ->select('id as value', 'name')
                ->selectRaw("concat(name,'‹',username,'›') as label")
                ->get()
                ->toArray();
        }
        if($type == 'region'){
            return array2tree($this->getModel()->region(),0);
        }
    }



}
