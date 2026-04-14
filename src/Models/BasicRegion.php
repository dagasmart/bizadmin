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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; use Illuminate\Support\Facades\DB; class BasicRegion extends Model { use SoftDeletes; protected $table = "\x62\x61\x73\x69\143\x5f\162\145\x67\151\x6f\x6e"; protected $primaryKey = "\x69\x64"; public function children() : hasMany { return $this->hasMany(get_class($this), "\x70\141\x72\145\x6e\164\137\x69\x64", "\x69\144"); } }
