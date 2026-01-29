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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; use Illuminate\Support\Facades\DB; class BasicRegion extends Model { use SoftDeletes; protected $table = "\x62\141\x73\151\143\137\162\145\x67\151\x6f\x6e"; protected $primaryKey = "\x69\144"; public function children() : hasMany { return $this->hasMany(get_class($this), "\160\141\162\145\x6e\x74\x5f\151\144", "\x69\x64"); } }
