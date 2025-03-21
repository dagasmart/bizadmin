<?php

namespace DagaSmart\BizAdmin\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use DagaSmart\BizAdmin\Models\BaseModel as Model;

/**
 * 系统消息表
 */
class SystemMessage extends Model
{
    //use SoftDeletes;

    protected $table = 'system_message';

    /**
     * 消息类型
     * @return array
     */
    public function typeOptions():array
    {
        return [
            ['value'=>'private',    'label'=>'私信'],
            ['value'=>'system',     'label'=>'系统', 'disabled'=>admin_user()->mer_id],
            ['value'=>'group',      'label'=>'群组'],
            ['value'=>'department', 'label'=>'部门'],
            ['value'=>'region',     'label'=>'地区'],
        ];
    }

    public function setToNamesAttribute($value)
    {
        if(is_array($value)){
            $this->attributes['to_names'] = implode(',', $value);
        }else {
            $this->attributes['to_names'] = $value;
        }
    }

    /**
     * 地区列表
     * @return array
     */
    public function region():array
    {
        return BasicRegion::query()
            ->whereIn('level',[1,2])
            ->select('id', 'code as value', 'name','parent_id')
            ->selectRaw("name as label")
            ->get()
            ->toArray();
    }

}
