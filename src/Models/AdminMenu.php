<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\144\x6d\x69\156\56\x61\144\x6d\151\156\137\x6d\145\x6e\x75\56\x72\x6f\x75\164\x65"), self::TYPE_LINK => admin_trans("\x61\144\155\151\156\56\x61\x64\155\151\156\x5f\155\x65\x6e\165\x2e\x6c\x69\156\x6b"), self::TYPE_IFRAME => admin_trans("\x61\144\x6d\151\156\x2e\141\144\155\x69\156\137\155\145\x6e\x75\56\151\x66\x72\x61\x6d\x65"), self::TYPE_PAGE => admin_trans("\x61\144\155\x69\156\56\x61\x64\x6d\x69\x6e\x5f\x6d\145\156\165\56\x70\141\x67\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\x61\x72\x65\156\x74\137\151\144"); } public function title() : Attribute { return Attribute::get(function ($msRQo) { goto Z0fJZ; Z0fJZ: $EhxEJ = ($this->extension ? $this->extension . "\x3a\72" : '') . "\155\x65\156\x75\56{$msRQo}"; goto UrR9n; UrR9n: $B7a5n = admin_trans($EhxEJ); goto csLwy; csLwy: return $B7a5n == $EhxEJ ? $msRQo : $B7a5n; goto neX9F; neX9F: }); } }
