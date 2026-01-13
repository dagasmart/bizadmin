<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\141\x64\x6d\151\x6e\56\141\144\x6d\x69\x6e\137\155\145\x6e\x75\x2e\x72\157\x75\164\x65"), self::TYPE_LINK => admin_trans("\141\x64\155\151\156\x2e\x61\x64\155\151\x6e\x5f\155\x65\156\x75\56\154\x69\156\153"), self::TYPE_IFRAME => admin_trans("\141\144\x6d\x69\156\x2e\141\x64\x6d\x69\x6e\x5f\x6d\145\x6e\165\x2e\x69\146\162\x61\x6d\145"), self::TYPE_PAGE => admin_trans("\x61\x64\155\x69\x6e\x2e\x61\x64\155\x69\x6e\137\155\x65\156\165\x2e\x70\x61\x67\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\141\162\145\156\164\x5f\151\144"); } public function title() : Attribute { return Attribute::get(function ($JqsAq) { goto B1qnl; LAMJy: $YnNwK = admin_trans($qkE_O); goto qahC_; qahC_: return $YnNwK == $qkE_O ? $JqsAq : $YnNwK; goto zAPew; B1qnl: $qkE_O = ($this->extension ? $this->extension . "\x3a\x3a" : '') . "\x6d\x65\x6e\x75\x2e{$JqsAq}"; goto LAMJy; zAPew: }); } }
