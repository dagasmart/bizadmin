<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\144\x6d\151\156\56\x61\144\x6d\151\x6e\137\155\x65\156\x75\x2e\162\157\165\x74\x65"), self::TYPE_LINK => admin_trans("\141\144\155\151\156\56\x61\144\155\x69\x6e\x5f\155\x65\x6e\x75\56\154\x69\156\153"), self::TYPE_IFRAME => admin_trans("\141\x64\x6d\x69\156\x2e\x61\x64\x6d\x69\156\x5f\x6d\145\x6e\x75\x2e\151\x66\x72\141\x6d\145"), self::TYPE_PAGE => admin_trans("\141\x64\x6d\151\x6e\56\141\x64\155\x69\156\x5f\x6d\x65\156\165\x2e\160\141\x67\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\x61\x72\145\156\x74\x5f\x69\144"); } public function title() : Attribute { return Attribute::get(function ($Hfwzl) { goto oJkbh; oJkbh: $pZsC0 = ($this->extension ? $this->extension . "\x3a\x3a" : '') . "\155\145\x6e\x75\56{$Hfwzl}"; goto OzzNn; NhydR: return $Nwqfb == $pZsC0 ? $Hfwzl : $Nwqfb; goto RJI8l; OzzNn: $Nwqfb = admin_trans($pZsC0); goto NhydR; RJI8l: }); } }
