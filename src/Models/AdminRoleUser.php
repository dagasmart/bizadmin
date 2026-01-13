<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\144\155\151\x6e\137\162\x6f\x6c\145\x5f\165\x73\x65\162\163"; protected $hidden = array("\155\145\162\137\x69\x64", "\x63\162\x65\141\x74\145\x64\137\x61\164", "\165\x70\144\x61\164\x65\x64\137\x61\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\x69\x64", "\x75\x73\x65\162\x5f\x69\x64")->select("\x69\144", "\156\x61\155\145")->addSelect($this->query()->raw("\x6e\x61\155\145\x20\x41\x53\40\154\141\x62\x65\x6c"))->addSelect($this->query()->raw("\151\144\x20\101\x53\x20\x76\x61\154\x75\145")); } }
