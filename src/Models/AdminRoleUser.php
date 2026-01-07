<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:04              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\144\x6d\x69\x6e\137\162\157\154\145\x5f\x75\x73\145\162\x73"; protected $hidden = array("\155\145\x72\x5f\151\x64", "\x63\162\145\141\x74\x65\144\137\x61\164", "\x75\x70\x64\x61\164\145\x64\x5f\141\x74"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\x69\144", "\x75\163\145\162\137\x69\144")->select("\151\x64", "\156\x61\155\145")->addSelect($this->query()->raw("\x6e\141\x6d\x65\40\x41\x53\40\154\141\x62\x65\x6c"))->addSelect($this->query()->raw("\x69\x64\40\101\123\40\166\x61\x6c\x75\x65")); } }
