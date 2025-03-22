<?php

namespace DagaSmart\BizAdmin\Models;

use DagaSmart\BizAdmin\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use DagaSmart\BizAdmin\Traits\CommonTrait;

class SystemSoft extends BaseModel
{
    use CommonTrait, SoftDeletes;

    protected $table = 'system_soft';

    protected $primaryKey = 'id';

    protected $appends = ['soft_icon_url','soft_images_url'];

    public function getSoftIconUrlAttribute(): ?string
    {
        return $this->ImageUrl($this->soft_icon);
    }

    public function setSoftIconAttribute($value): void
    {
        $this->attributes['soft_icon'] = $this->ImagePath($value);
    }

    public function getSoftImagesUrlAttribute(): ?string
    {
        return $this->ImageFormat($this->soft_images,1);
    }

    public function setSoftImagesAttribute($value): void
    {
        $this->attributes['soft_images'] = $this->ImageFormat($value);
    }


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
