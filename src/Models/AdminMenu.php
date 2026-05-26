<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\144\155\151\156\x2e\141\x64\155\151\156\x5f\x6d\145\156\x75\x2e\162\x6f\165\x74\145"), self::TYPE_LINK => admin_trans("\x61\x64\x6d\151\x6e\x2e\x61\144\155\x69\156\x5f\155\x65\156\x75\56\x6c\x69\x6e\153"), self::TYPE_IFRAME => admin_trans("\x61\144\x6d\151\156\x2e\141\144\155\x69\156\137\155\x65\x6e\x75\x2e\151\x66\162\141\155\x65"), self::TYPE_PAGE => admin_trans("\x61\x64\155\x69\156\56\141\x64\x6d\151\156\x5f\x6d\145\156\165\56\x70\x61\147\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\141\162\145\x6e\164\137\151\144"); } public function title() : Attribute { return Attribute::get(function ($msRQo) { goto OSMBT; XVHiK: $B7a5n = admin_trans($EhxEJ); goto WHcgg; OSMBT: $EhxEJ = ($this->extension ? $this->extension . "\x3a\72" : '') . "\155\x65\x6e\165\56{$msRQo}"; goto XVHiK; WHcgg: return $B7a5n == $EhxEJ ? $msRQo : $B7a5n; goto p06Ka; p06Ka: }); } }
