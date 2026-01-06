<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\144\x6d\151\156\x5f\162\x6f\154\x65\137\x75\163\145\162\163"; protected $hidden = array("\155\145\x72\x5f\x69\x64", "\143\x72\x65\141\x74\x65\x64\x5f\x61\x74", "\x75\x70\x64\141\x74\x65\x64\137\141\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\144", "\165\163\145\162\137\x69\x64")->select("\x69\x64", "\x6e\x61\x6d\145")->addSelect($this->query()->raw("\156\x61\155\145\x20\x41\123\x20\x6c\141\x62\145\x6c"))->addSelect($this->query()->raw("\151\144\40\x41\x53\x20\166\141\x6c\165\145")); } }
