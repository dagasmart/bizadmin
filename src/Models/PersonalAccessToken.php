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
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $eYgQj = []) { $this->setConnection(Admin::config("\141\144\155\x69\156\x2e\x64\141\164\141\x62\x61\163\x65\56\x63\x6f\156\156\x65\143\x74\x69\x6f\x6e")); parent::__construct($eYgQj); } public static function findToken($nOpwa) { goto W6rgl; uskKR: return hash_equals($f2UWF->token, hash("\163\x68\x61\62\x35\x36", $nOpwa)) ? $f2UWF : null; goto rVy6q; DdYOu: [$CseLa, $nOpwa] = explode("\x7c", $nOpwa, 2); goto jOMZ7; eQT9C: H0IBF: goto DdYOu; jOMZ7: $f2UWF = static::withInExpiration()->find($CseLa); goto yn7Dw; rIW4P: return static::where("\x74\157\x6b\145\156", hash("\x73\x68\141\x32\x35\66", $nOpwa))->withInExpiration()->first(); goto eQT9C; yn7Dw: if (!$f2UWF) { goto XNQ0Y; } goto uskKR; LXW1a: return null; goto JMitR; W6rgl: if (str_contains($nOpwa, "\174")) { goto H0IBF; } goto rIW4P; rVy6q: XNQ0Y: goto LXW1a; JMitR: } public function scopeWithInExpiration($jAg8I) { goto D2OSk; BCVwR: return $jAg8I; goto m_z7O; D2OSk: $DlO81 = config("\x61\144\x6d\151\x6e\56\x61\x75\x74\x68\x2e\164\x6f\153\145\156\137\x65\170\160\x69\x72\x61\164\151\x6f\156"); goto IAu13; IAu13: $jAg8I->when($DlO81, function ($ogxKU) use($DlO81) { $ogxKU->where("\x6c\141\x73\164\x5f\x75\x73\145\x64\x5f\141\x74", "\76\75", now()->subMinutes($DlO81)); $ogxKU->orWhereNull("\154\x61\163\164\137\165\163\145\144\x5f\x61\x74"); }); goto BCVwR; m_z7O: } }
