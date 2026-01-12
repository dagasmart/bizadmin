<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:58              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\x64\x6d\151\x6e\x2e\141\x64\155\x69\156\x5f\x6d\145\156\x75\56\x72\157\165\164\145"), self::TYPE_LINK => admin_trans("\x61\144\x6d\151\156\x2e\x61\144\155\151\x6e\137\155\x65\x6e\165\56\x6c\x69\156\x6b"), self::TYPE_IFRAME => admin_trans("\141\144\x6d\151\156\x2e\x61\144\155\151\156\137\x6d\x65\x6e\165\x2e\x69\146\162\x61\x6d\x65"), self::TYPE_PAGE => admin_trans("\x61\144\x6d\151\156\56\x61\x64\x6d\x69\156\137\x6d\145\x6e\x75\56\x70\x61\x67\145")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\141\x72\145\x6e\x74\137\x69\x64"); } public function title() : Attribute { return Attribute::get(function ($PBVs1) { goto qFQjf; qFQjf: $cDURz = ($this->extension ? $this->extension . "\72\72" : '') . "\155\145\x6e\165\x2e{$PBVs1}"; goto jCiEz; jCiEz: $tlsS6 = admin_trans($cDURz); goto qRxgg; qRxgg: return $tlsS6 == $cDURz ? $PBVs1 : $tlsS6; goto bgYzw; bgYzw: }); } }
