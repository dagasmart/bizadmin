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
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $FHTAF = []) { $this->setConnection(Admin::config("\x61\x64\x6d\x69\x6e\x2e\x64\x61\x74\x61\x62\141\163\x65\56\x63\x6f\156\156\145\143\164\x69\x6f\156")); parent::__construct($FHTAF); } public static function findToken($awBNB) { goto qaArQ; qaArQ: if (str_contains($awBNB, "\x7c")) { goto vIbWE; } goto UIGa5; a74xV: return null; goto lvRKQ; JJJFf: [$VpHmx, $awBNB] = explode("\174", $awBNB, 2); goto fpbh2; fpbh2: $wRZUE = static::withInExpiration()->find($VpHmx); goto mI8eT; UIGa5: return static::where("\164\157\153\x65\x6e", hash("\x73\x68\141\62\65\x36", $awBNB))->withInExpiration()->first(); goto mkNJa; JfJom: return hash_equals($wRZUE->token, hash("\x73\x68\141\62\65\x36", $awBNB)) ? $wRZUE : null; goto zVTLy; mkNJa: vIbWE: goto JJJFf; zVTLy: KLMZl: goto a74xV; mI8eT: if (!$wRZUE) { goto KLMZl; } goto JfJom; lvRKQ: } public function scopeWithInExpiration($HpvUM) { goto llURM; llURM: $n37H7 = config("\x61\x64\155\151\x6e\56\141\x75\x74\150\56\x74\157\x6b\145\156\x5f\145\x78\160\151\x72\x61\164\x69\x6f\156"); goto fGHQn; fGHQn: $HpvUM->when($n37H7, function ($Bl0DI) use($n37H7) { $Bl0DI->where("\x6c\x61\x73\164\137\165\163\145\x64\137\x61\164", "\76\75", now()->subMinutes($n37H7)); $Bl0DI->orWhereNull("\x6c\141\163\x74\137\165\163\x65\144\137\141\164"); }); goto pFC4N; pFC4N: return $HpvUM; goto VPviQ; VPviQ: } }
