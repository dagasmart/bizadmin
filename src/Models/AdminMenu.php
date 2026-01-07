<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\x64\x6d\x69\x6e\56\x61\x64\x6d\x69\156\x5f\x6d\x65\156\x75\x2e\x72\157\165\x74\145"), self::TYPE_LINK => admin_trans("\141\x64\155\151\156\56\x61\x64\x6d\x69\156\137\x6d\145\x6e\x75\56\154\x69\156\x6b"), self::TYPE_IFRAME => admin_trans("\141\144\x6d\x69\156\56\141\144\x6d\x69\156\137\x6d\x65\156\165\x2e\x69\146\162\141\155\145"), self::TYPE_PAGE => admin_trans("\x61\144\x6d\x69\156\x2e\141\144\155\151\156\x5f\155\145\156\x75\56\160\x61\x67\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\x61\x72\x65\156\x74\137\151\144"); } public function title() : Attribute { return Attribute::get(function ($w0aoq) { goto NnfPQ; E0UT9: return $p73pL == $gVue5 ? $w0aoq : $p73pL; goto hFqni; NnfPQ: $gVue5 = ($this->extension ? $this->extension . "\x3a\72" : '') . "\x6d\145\156\165\x2e{$w0aoq}"; goto MckCp; MckCp: $p73pL = admin_trans($gVue5); goto E0UT9; hFqni: }); } }
