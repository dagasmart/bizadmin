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
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $REoPi = []) { $this->setConnection(Admin::config("\x61\144\155\x69\156\x2e\144\141\164\141\x62\x61\163\x65\56\x63\x6f\156\156\145\x63\x74\151\157\156")); parent::__construct($REoPi); } public static function findToken($d3u2m) { goto SvUp3; ytDFZ: return static::where("\x74\157\x6b\145\156", hash("\163\150\141\x32\x35\66", $d3u2m))->withInExpiration()->first(); goto a71Aw; SvUp3: if (str_contains($d3u2m, "\174")) { goto e0vZg; } goto ytDFZ; a71Aw: e0vZg: goto srON1; srON1: [$GD4cJ, $d3u2m] = explode("\x7c", $d3u2m, 2); goto Fxed3; TOfUX: return hash_equals($Ratdj->token, hash("\x73\x68\x61\x32\65\x36", $d3u2m)) ? $Ratdj : null; goto kBdib; Fxed3: $Ratdj = static::withInExpiration()->find($GD4cJ); goto hzBA0; hzBA0: if (!$Ratdj) { goto OafBQ; } goto TOfUX; kBdib: OafBQ: goto fgfSG; fgfSG: return null; goto GP42T; GP42T: } public function scopeWithInExpiration($U1_uc) { goto cUlus; cUlus: $pP1tk = config("\141\x64\x6d\151\x6e\x2e\141\x75\x74\x68\56\164\x6f\x6b\x65\156\137\x65\x78\160\x69\x72\x61\x74\151\157\156"); goto EpZ42; EpZ42: $U1_uc->when($pP1tk, function ($lG7Ic) use($pP1tk) { $lG7Ic->where("\x6c\x61\x73\164\137\165\x73\145\x64\x5f\141\164", "\76\x3d", now()->subMinutes($pP1tk)); $lG7Ic->orWhereNull("\154\x61\163\164\x5f\x75\163\145\144\x5f\x61\164"); }); goto yeRYE; yeRYE: return $U1_uc; goto LvWDe; LvWDe: } }
