<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\x64\155\151\x6e\56\141\x64\155\x69\x6e\137\x6d\145\156\x75\56\x72\157\165\x74\145"), self::TYPE_LINK => admin_trans("\141\144\155\x69\156\56\x61\144\155\x69\x6e\137\155\x65\156\165\x2e\154\x69\156\x6b"), self::TYPE_IFRAME => admin_trans("\141\144\155\151\156\x2e\x61\x64\155\151\156\137\x6d\145\156\165\56\151\x66\162\141\x6d\145"), self::TYPE_PAGE => admin_trans("\141\x64\x6d\x69\156\56\x61\144\x6d\151\156\137\x6d\x65\x6e\165\56\x70\141\147\145")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\x61\x72\145\x6e\164\137\151\144"); } public function title() : Attribute { return Attribute::get(function ($eXCcR) { goto B2nPH; TFQUZ: return $LCY8j == $wvlgX ? $eXCcR : $LCY8j; goto S5L1u; WF6qc: $LCY8j = admin_trans($wvlgX); goto TFQUZ; B2nPH: $wvlgX = ($this->extension ? $this->extension . "\x3a\72" : '') . "\155\x65\x6e\x75\56{$eXCcR}"; goto WF6qc; S5L1u: }); } }
