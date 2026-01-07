<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:04              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\144\155\x69\x6e\x2e\x61\x64\x6d\x69\156\137\x6d\145\x6e\165\56\x72\x6f\165\x74\x65"), self::TYPE_LINK => admin_trans("\141\144\x6d\151\156\x2e\x61\x64\x6d\x69\156\x5f\x6d\x65\156\165\x2e\154\151\156\x6b"), self::TYPE_IFRAME => admin_trans("\141\144\155\151\156\x2e\141\144\155\x69\156\137\x6d\x65\156\165\56\x69\x66\162\x61\155\145"), self::TYPE_PAGE => admin_trans("\141\144\155\x69\156\56\141\144\x6d\151\x6e\x5f\155\145\156\165\x2e\x70\x61\147\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\x70\141\162\x65\156\164\x5f\x69\144"); } public function title() : Attribute { return Attribute::get(function ($wMm3m) { goto D24e2; ofwVG: $IG2it = admin_trans($U2hnb); goto aeZzr; D24e2: $U2hnb = ($this->extension ? $this->extension . "\x3a\72" : '') . "\155\145\x6e\165\56{$wMm3m}"; goto ofwVG; aeZzr: return $IG2it == $U2hnb ? $wMm3m : $IG2it; goto k7u03; k7u03: }); } }
