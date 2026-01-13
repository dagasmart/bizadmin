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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Relations\HasMany; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; use Illuminate\Support\Facades\DB; class BasicRegion extends Model { use SoftDeletes; protected $table = "\142\141\x73\151\x63\x5f\162\x65\147\151\157\x6e"; protected $primaryKey = "\151\x64"; public function children() : hasMany { return $this->hasMany(get_class($this), "\x70\x61\x72\145\x6e\164\x5f\151\144", "\x69\144"); } }
