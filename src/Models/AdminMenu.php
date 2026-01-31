<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:01              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\x61\144\x6d\151\156\56\x61\x64\x6d\x69\x6e\x5f\x6d\145\156\165\56\162\157\165\164\145"), self::TYPE_LINK => admin_trans("\141\x64\155\151\156\56\141\144\155\x69\156\137\x6d\145\156\165\x2e\154\151\x6e\x6b"), self::TYPE_IFRAME => admin_trans("\x61\144\x6d\151\156\x2e\x61\144\x6d\151\156\137\155\x65\x6e\x75\x2e\151\146\162\x61\155\x65"), self::TYPE_PAGE => admin_trans("\141\144\x6d\151\156\56\x61\x64\x6d\151\156\x5f\x6d\x65\156\x75\x2e\160\141\147\x65")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\160\141\162\x65\156\164\x5f\151\144"); } public function title() : Attribute { return Attribute::get(function ($gp6i6) { goto yFqAc; C6iJO: return $awBMz == $vaqO1 ? $gp6i6 : $awBMz; goto s_s7U; yFqAc: $vaqO1 = ($this->extension ? $this->extension . "\72\72" : '') . "\155\x65\x6e\165\56{$gp6i6}"; goto InkDu; InkDu: $awBMz = admin_trans($vaqO1); goto C6iJO; s_s7U: }); } }
