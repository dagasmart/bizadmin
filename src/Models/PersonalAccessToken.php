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
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $xcmkx = []) { $this->setConnection(Admin::config("\141\x64\x6d\x69\x6e\x2e\144\141\x74\x61\x62\141\x73\145\x2e\143\x6f\156\x6e\145\x63\164\151\x6f\156")); parent::__construct($xcmkx); } public static function findToken($bbXGr) { goto YeIff; YeIff: if (str_contains($bbXGr, "\174")) { goto Dn_2b; } goto zukDF; GoiUd: Dn_2b: goto YHptx; SS7aI: BR3D4: goto bBk1n; g2sab: if (!$h7mf7) { goto BR3D4; } goto ZqcYn; ZqcYn: return hash_equals($h7mf7->token, hash("\163\x68\x61\x32\x35\66", $bbXGr)) ? $h7mf7 : null; goto SS7aI; zukDF: return static::where("\164\x6f\153\145\x6e", hash("\x73\x68\x61\62\65\66", $bbXGr))->withInExpiration()->first(); goto GoiUd; bBk1n: return null; goto PtYBh; kL2Rs: $h7mf7 = static::withInExpiration()->find($gVsPI); goto g2sab; YHptx: [$gVsPI, $bbXGr] = explode("\x7c", $bbXGr, 2); goto kL2Rs; PtYBh: } public function scopeWithInExpiration($rrYEL) { goto QhYnt; HMPHW: return $rrYEL; goto Tjxdt; l7VqX: $rrYEL->when($SF7uD, function ($sDw__) use($SF7uD) { $sDw__->where("\154\141\x73\x74\x5f\x75\x73\x65\144\137\x61\x74", "\x3e\75", now()->subMinutes($SF7uD)); $sDw__->orWhereNull("\x6c\141\x73\x74\x5f\x75\x73\x65\x64\137\x61\x74"); }); goto HMPHW; QhYnt: $SF7uD = config("\141\144\x6d\x69\x6e\56\141\x75\164\x68\x2e\x74\157\153\x65\156\137\145\x78\x70\x69\x72\x61\x74\151\157\x6e"); goto l7VqX; Tjxdt: } }
