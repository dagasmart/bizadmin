<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; class AdminRoleUser extends BaseModel { protected $table = "\x61\144\x6d\x69\156\137\162\x6f\x6c\x65\137\x75\163\145\162\163"; protected $hidden = array("\155\145\162\137\x69\x64", "\143\162\x65\141\164\145\144\137\x61\164", "\x75\x70\144\x61\164\x65\x64\x5f\141\164"); protected $visible = array(); public function children() : HasMany { return $this->hasMany(AdminUser::class, "\151\x64", "\165\x73\145\x72\137\151\144")->select("\151\x64", "\x6e\141\155\145")->addSelect($this->query()->raw("\x6e\141\155\145\x20\101\123\40\154\x61\x62\145\x6c"))->addSelect($this->query()->raw("\151\144\40\101\123\40\166\x61\154\x75\x65")); } }
