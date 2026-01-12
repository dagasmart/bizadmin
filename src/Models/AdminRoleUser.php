<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:58              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\x64\155\x69\x6e\x5f\x72\x6f\x6c\145\x5f\x75\x73\x65\x72\163"; protected $hidden = array("\x6d\145\x72\x5f\151\144", "\x63\x72\145\141\x74\x65\x64\x5f\x61\164", "\x75\x70\x64\x61\164\x65\x64\x5f\141\x74"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\x69\x64", "\x75\x73\145\162\137\x69\x64")->select("\x69\144", "\156\x61\x6d\145")->addSelect($this->query()->raw("\156\x61\155\x65\x20\101\x53\x20\154\x61\142\x65\x6c"))->addSelect($this->query()->raw("\x69\x64\40\x41\x53\40\166\141\154\165\x65")); } }
