<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; use Illuminate\Support\Facades\DB; class BasicRegion extends Model { use SoftDeletes; protected $table = "\142\141\x73\151\143\137\x72\x65\147\x69\x6f\x6e"; protected $primaryKey = "\x69\144"; public function children() : hasMany { return $this->hasMany(get_class($this), "\160\x61\x72\x65\x6e\164\x5f\151\x64", "\x69\144"); } }
