<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\x64\x6d\x69\156\x5f\x72\157\x6c\145\137\165\163\145\x72\x73"; protected $hidden = array("\155\145\x72\x5f\151\x64", "\143\162\145\x61\164\x65\144\137\x61\164", "\165\160\x64\x61\x74\145\x64\137\x61\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\x64", "\x75\163\x65\x72\x5f\151\144")->select("\151\x64", "\156\141\155\x65")->addSelect($this->query()->raw("\x6e\x61\x6d\145\40\x41\123\40\154\x61\142\x65\154"))->addSelect($this->query()->raw("\x69\144\40\x41\x53\x20\166\141\154\165\x65")); } }
