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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; use Illuminate\Support\Facades\DB; class BasicRegion extends Model { use SoftDeletes; protected $table = "\x62\141\163\x69\x63\x5f\x72\x65\x67\x69\x6f\x6e"; protected $primaryKey = "\x69\x64"; public function children() : hasMany { return $this->hasMany(get_class($this), "\160\x61\x72\x65\156\x74\x5f\151\144", "\x69\x64"); } }
