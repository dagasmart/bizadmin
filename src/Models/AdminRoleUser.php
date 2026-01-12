<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\144\x6d\151\156\x5f\162\157\154\x65\x5f\x75\163\145\162\163"; protected $hidden = array("\x6d\x65\x72\137\151\x64", "\x63\x72\145\x61\x74\x65\144\x5f\x61\x74", "\165\160\144\x61\164\145\x64\137\x61\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\144", "\x75\x73\x65\x72\137\151\144")->select("\151\x64", "\x6e\x61\x6d\145")->addSelect($this->query()->raw("\156\x61\155\x65\40\101\x53\x20\x6c\141\142\145\x6c"))->addSelect($this->query()->raw("\151\x64\40\101\x53\40\166\x61\154\165\x65")); } }
