<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:29              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\144\x6d\x69\156\137\162\x6f\x6c\145\x5f\x75\x73\x65\x72\163"; protected $hidden = array("\x6d\x65\x72\x5f\151\x64", "\x63\x72\145\141\164\x65\x64\x5f\x61\x74", "\165\160\144\x61\x74\145\x64\x5f\141\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\x69\144", "\x75\163\145\x72\x5f\151\144")->select("\x69\x64", "\156\x61\155\145")->addSelect($this->query()->raw("\156\x61\x6d\145\x20\101\x53\x20\154\141\x62\x65\x6c"))->addSelect($this->query()->raw("\x69\x64\40\101\x53\x20\x76\141\154\165\145")); } }
