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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\x64\x6d\151\156\56\141\144\x6d\151\x6e\x5f\155\145\x6e\x75\56\162\x6f\x75\x74\145"), self::TYPE_LINK => admin_trans("\x61\144\x6d\x69\156\x2e\x61\144\155\151\156\137\x6d\x65\156\x75\x2e\x6c\151\156\x6b"), self::TYPE_IFRAME => admin_trans("\x61\x64\155\151\156\x2e\x61\144\155\x69\156\137\x6d\x65\156\x75\56\x69\x66\x72\x61\x6d\x65"), self::TYPE_PAGE => admin_trans("\141\x64\155\151\156\56\141\144\x6d\x69\x6e\137\155\x65\x6e\165\x2e\x70\x61\147\145")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\x61\x72\145\156\164\137\151\x64"); } public function title() : Attribute { return Attribute::get(function ($AHvXX) { goto SgdUd; ZYMPA: $YMTgG = admin_trans($LVvjd); goto Awbcm; Awbcm: return $YMTgG == $LVvjd ? $AHvXX : $YMTgG; goto dQwNx; SgdUd: $LVvjd = ($this->extension ? $this->extension . "\72\72" : '') . "\155\x65\x6e\165\x2e{$AHvXX}"; goto ZYMPA; dQwNx: }); } }
