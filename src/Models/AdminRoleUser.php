<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\x61\x64\155\151\x6e\137\162\x6f\x6c\x65\137\165\163\145\x72\163"; protected $hidden = array("\155\x65\162\137\x69\144", "\143\x72\x65\141\x74\145\144\x5f\141\164", "\165\x70\x64\x61\x74\145\144\x5f\141\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\x69\144", "\x75\x73\x65\x72\137\151\x64")->select("\x69\144", "\156\x61\x6d\x65")->addSelect($this->query()->raw("\156\141\155\x65\40\x41\x53\40\154\x61\x62\x65\154"))->addSelect($this->query()->raw("\151\144\x20\101\123\x20\166\x61\154\165\x65")); } }
