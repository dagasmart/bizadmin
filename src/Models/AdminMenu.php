<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\141\x64\155\151\156\x2e\x61\144\x6d\x69\x6e\137\x6d\145\156\165\x2e\162\157\x75\164\145"), self::TYPE_LINK => admin_trans("\141\x64\x6d\151\x6e\x2e\141\144\155\x69\x6e\137\x6d\145\x6e\165\x2e\154\151\156\x6b"), self::TYPE_IFRAME => admin_trans("\141\144\155\151\156\56\141\144\155\x69\156\137\155\x65\x6e\x75\56\x69\x66\162\x61\155\x65"), self::TYPE_PAGE => admin_trans("\x61\x64\155\x69\x6e\x2e\141\144\x6d\x69\x6e\x5f\x6d\x65\x6e\165\x2e\160\x61\x67\145")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\x70\141\x72\145\156\x74\x5f\151\144"); } public function title() : Attribute { return Attribute::get(function ($nMamD) { goto En1Sz; En1Sz: $DpLoK = ($this->extension ? $this->extension . "\72\72" : '') . "\155\x65\156\x75\x2e{$nMamD}"; goto DwtuM; j60PT: return $sLCSR == $DpLoK ? $nMamD : $sLCSR; goto FS0iE; DwtuM: $sLCSR = admin_trans($DpLoK); goto j60PT; FS0iE: }); } }
