<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\x64\155\x69\156\56\x61\144\x6d\151\156\x5f\x6d\x65\156\165\56\x72\x6f\x75\x74\x65"), self::TYPE_LINK => admin_trans("\141\x64\155\151\x6e\56\x61\x64\155\151\x6e\137\x6d\145\156\x75\x2e\x6c\x69\156\153"), self::TYPE_IFRAME => admin_trans("\x61\x64\x6d\x69\x6e\x2e\x61\x64\155\x69\156\137\155\145\x6e\165\56\x69\x66\162\141\x6d\145"), self::TYPE_PAGE => admin_trans("\x61\144\x6d\x69\156\x2e\141\x64\x6d\x69\x6e\137\x6d\x65\x6e\x75\x2e\160\141\x67\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\141\x72\145\156\x74\137\x69\x64"); } public function title() : Attribute { return Attribute::get(function ($msRQo) { goto p0_4Q; p0_4Q: $EhxEJ = ($this->extension ? $this->extension . "\x3a\x3a" : '') . "\x6d\145\156\165\x2e{$msRQo}"; goto N5yZz; N5yZz: $B7a5n = admin_trans($EhxEJ); goto IziS4; IziS4: return $B7a5n == $EhxEJ ? $msRQo : $B7a5n; goto lu11P; lu11P: }); } }
