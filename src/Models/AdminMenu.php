<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:28              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\144\155\151\156\56\141\144\x6d\151\156\x5f\155\145\156\x75\56\x72\x6f\165\x74\x65"), self::TYPE_LINK => admin_trans("\141\144\x6d\151\x6e\56\x61\144\x6d\x69\x6e\x5f\155\145\156\x75\56\x6c\151\x6e\x6b"), self::TYPE_IFRAME => admin_trans("\x61\144\155\x69\156\x2e\x61\x64\155\151\156\137\x6d\x65\x6e\165\x2e\x69\x66\x72\x61\x6d\x65"), self::TYPE_PAGE => admin_trans("\141\x64\x6d\151\156\56\x61\144\x6d\x69\x6e\137\x6d\x65\x6e\x75\x2e\160\x61\147\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\x70\x61\162\145\x6e\164\137\151\x64"); } public function title() : Attribute { return Attribute::get(function ($b5EKT) { goto ma95A; ma95A: $y2yPl = ($this->extension ? $this->extension . "\x3a\x3a" : '') . "\155\x65\x6e\x75\x2e{$b5EKT}"; goto Vvg3z; MXwq4: return $t7bMk == $y2yPl ? $b5EKT : $t7bMk; goto Tz8RD; Vvg3z: $t7bMk = admin_trans($y2yPl); goto MXwq4; Tz8RD: }); } }
