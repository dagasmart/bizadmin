<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:30              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\141\144\155\151\156\x2e\x61\144\155\151\156\x5f\x6d\145\156\165\56\162\157\165\164\x65"), self::TYPE_LINK => admin_trans("\141\144\x6d\151\x6e\x2e\x61\x64\x6d\151\156\x5f\x6d\145\156\x75\56\154\x69\156\153"), self::TYPE_IFRAME => admin_trans("\x61\x64\x6d\x69\x6e\x2e\141\x64\155\x69\156\137\x6d\x65\x6e\165\56\x69\x66\162\141\155\x65"), self::TYPE_PAGE => admin_trans("\x61\x64\155\151\x6e\x2e\141\x64\155\x69\156\137\155\x65\x6e\165\56\x70\141\147\145")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\x61\162\145\156\x74\x5f\151\144"); } public function title() : Attribute { return Attribute::get(function ($NXsnd) { goto GPtrE; GPtrE: $wssAF = ($this->extension ? $this->extension . "\x3a\72" : '') . "\x6d\x65\156\x75\56{$NXsnd}"; goto u2vAz; oaD48: return $ogCh8 == $wssAF ? $NXsnd : $ogCh8; goto WD10y; u2vAz: $ogCh8 = admin_trans($wssAF); goto oaD48; WD10y: }); } }
