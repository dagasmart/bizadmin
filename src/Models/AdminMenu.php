<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\144\155\x69\156\56\141\x64\x6d\x69\156\x5f\155\x65\x6e\x75\x2e\x72\157\165\x74\145"), self::TYPE_LINK => admin_trans("\x61\144\x6d\x69\156\x2e\x61\x64\155\151\156\137\x6d\x65\x6e\x75\x2e\154\151\x6e\x6b"), self::TYPE_IFRAME => admin_trans("\x61\x64\155\151\156\56\x61\x64\155\151\x6e\x5f\x6d\145\x6e\x75\56\151\x66\162\141\x6d\x65"), self::TYPE_PAGE => admin_trans("\141\144\x6d\151\156\x2e\141\144\155\x69\x6e\137\x6d\x65\x6e\x75\56\x70\x61\147\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\x61\x72\145\156\x74\137\x69\144"); } public function title() : Attribute { return Attribute::get(function ($U5YWC) { goto O1JIl; so0E2: return $Bga8J == $KiGoy ? $U5YWC : $Bga8J; goto YROwK; K88VX: $Bga8J = admin_trans($KiGoy); goto so0E2; O1JIl: $KiGoy = ($this->extension ? $this->extension . "\x3a\72" : '') . "\155\145\156\165\x2e{$U5YWC}"; goto K88VX; YROwK: }); } }
