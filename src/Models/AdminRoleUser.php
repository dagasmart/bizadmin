<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:42              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\144\x6d\x69\156\x5f\x72\x6f\154\x65\137\x75\x73\145\x72\x73"; protected $hidden = array("\155\x65\162\137\x69\x64", "\143\162\x65\x61\x74\145\144\x5f\141\164", "\x75\160\144\x61\164\x65\x64\137\x61\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\x64", "\165\x73\x65\x72\x5f\x69\x64")->select("\151\144", "\156\x61\x6d\x65")->addSelect($this->query()->raw("\x6e\x61\x6d\x65\x20\x41\123\40\x6c\x61\142\145\x6c"))->addSelect($this->query()->raw("\x69\x64\40\x41\x53\x20\x76\x61\x6c\x75\x65")); } }
