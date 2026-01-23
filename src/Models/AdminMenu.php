<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\141\x64\x6d\x69\156\x2e\141\x64\155\151\x6e\x5f\x6d\145\x6e\165\x2e\x72\x6f\x75\164\145"), self::TYPE_LINK => admin_trans("\x61\144\x6d\151\x6e\56\x61\x64\x6d\x69\x6e\x5f\155\x65\156\165\56\x6c\151\156\153"), self::TYPE_IFRAME => admin_trans("\x61\144\x6d\151\156\x2e\141\144\155\x69\156\137\155\x65\x6e\x75\x2e\x69\146\162\141\155\145"), self::TYPE_PAGE => admin_trans("\141\144\x6d\151\156\x2e\141\144\x6d\x69\156\137\x6d\x65\x6e\x75\56\x70\141\147\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\x61\162\145\156\x74\x5f\151\144"); } public function title() : Attribute { return Attribute::get(function ($wZVig) { goto sHMVs; l__oS: return $B0rIh == $O0KKj ? $wZVig : $B0rIh; goto K5OoP; nAd0g: $B0rIh = admin_trans($O0KKj); goto l__oS; sHMVs: $O0KKj = ($this->extension ? $this->extension . "\x3a\72" : '') . "\x6d\x65\156\165\x2e{$wZVig}"; goto nAd0g; K5OoP: }); } }
