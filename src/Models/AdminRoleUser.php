<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\141\x64\x6d\151\156\x5f\162\157\154\x65\x5f\165\x73\145\162\163"; protected $hidden = array("\155\145\x72\x5f\151\144", "\x63\162\145\x61\164\x65\144\137\x61\164", "\165\x70\144\141\164\145\x64\137\141\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\144", "\x75\x73\x65\x72\137\x69\144")->select("\x69\x64", "\156\x61\155\145")->addSelect($this->query()->raw("\156\x61\x6d\145\x20\101\x53\40\x6c\141\142\x65\x6c"))->addSelect($this->query()->raw("\x69\x64\40\101\x53\40\166\x61\x6c\x75\145")); } }
