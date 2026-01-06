<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\x64\x6d\x69\x6e\137\162\x6f\154\x65\137\165\163\x65\162\163"; protected $hidden = array("\x6d\145\162\137\151\144", "\143\162\145\x61\164\x65\144\137\x61\164", "\x75\160\144\x61\x74\x65\144\x5f\141\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\x64", "\x75\x73\145\162\x5f\x69\x64")->select("\151\x64", "\156\x61\155\145")->addSelect($this->query()->raw("\156\141\155\145\40\101\x53\x20\x6c\141\142\x65\x6c"))->addSelect($this->query()->raw("\x69\x64\x20\x41\123\40\166\x61\154\165\145")); } }
