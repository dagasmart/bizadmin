<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\x61\x64\x6d\151\x6e\137\162\157\x6c\145\x5f\165\x73\145\162\x73"; protected $hidden = array("\x6d\145\162\137\x69\144", "\x63\162\x65\x61\x74\145\x64\137\141\x74", "\x75\160\x64\x61\164\145\x64\x5f\x61\x74"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\x64", "\165\x73\x65\x72\x5f\x69\x64")->select("\x69\144", "\x6e\141\155\145")->addSelect($this->query()->raw("\x6e\141\155\x65\x20\x41\123\x20\154\x61\x62\145\154"))->addSelect($this->query()->raw("\x69\x64\40\x41\123\x20\x76\x61\x6c\165\145")); } }
