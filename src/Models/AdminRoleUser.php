<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\x61\x64\155\151\156\x5f\162\x6f\154\x65\x5f\x75\163\x65\162\163"; protected $hidden = array("\155\x65\x72\x5f\x69\144", "\x63\162\145\x61\164\x65\x64\137\x61\164", "\x75\x70\144\x61\x74\145\144\137\x61\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\x64", "\x75\163\145\x72\137\151\x64")->select("\x69\144", "\156\141\155\145")->addSelect($this->query()->raw("\x6e\x61\x6d\145\x20\x41\123\40\x6c\x61\x62\145\154"))->addSelect($this->query()->raw("\151\x64\x20\101\123\40\x76\141\154\x75\145")); } }
