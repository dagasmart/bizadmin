<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:01              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\x61\144\x6d\x69\x6e\x5f\162\157\154\145\137\x75\x73\145\162\163"; protected $hidden = array("\155\145\x72\x5f\x69\x64", "\143\162\x65\141\164\x65\x64\x5f\141\164", "\165\x70\x64\141\x74\145\x64\x5f\x61\x74"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\144", "\x75\x73\145\x72\137\x69\144")->select("\x69\x64", "\x6e\x61\155\x65")->addSelect($this->query()->raw("\x6e\141\155\x65\40\101\x53\40\x6c\141\x62\x65\x6c"))->addSelect($this->query()->raw("\x69\x64\40\101\123\40\166\x61\154\x75\x65")); } }
