<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\141\x64\155\x69\x6e\56\141\x64\x6d\x69\x6e\x5f\x6d\x65\x6e\x75\x2e\x72\157\x75\164\145"), self::TYPE_LINK => admin_trans("\141\144\155\x69\156\56\x61\144\155\151\x6e\137\155\x65\156\165\56\154\x69\x6e\x6b"), self::TYPE_IFRAME => admin_trans("\141\x64\155\151\x6e\56\141\144\x6d\x69\x6e\137\x6d\145\x6e\165\x2e\x69\x66\x72\141\x6d\x65"), self::TYPE_PAGE => admin_trans("\x61\x64\155\151\156\x2e\x61\x64\155\151\x6e\137\155\145\156\165\56\160\x61\147\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\x70\x61\x72\x65\x6e\x74\x5f\151\144"); } public function title() : Attribute { return Attribute::get(function ($PfrF0) { goto J0P3D; FVhoO: $U0JkY = admin_trans($W9JvX); goto a9wbp; J0P3D: $W9JvX = ($this->extension ? $this->extension . "\x3a\x3a" : '') . "\x6d\145\156\x75\x2e{$PfrF0}"; goto FVhoO; a9wbp: return $U0JkY == $W9JvX ? $PfrF0 : $U0JkY; goto a3GFf; a3GFf: }); } }
