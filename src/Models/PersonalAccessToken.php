<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $v6AJv = []) { $this->setConnection(Admin::config("\x61\144\155\151\156\56\x64\141\164\x61\142\141\163\x65\x2e\143\157\156\x6e\145\x63\x74\x69\x6f\156")); parent::__construct($v6AJv); } public static function findToken($rEqQ3) { goto mhr0W; HX1za: if (!$gORgj) { goto decP_; } goto GCImu; IKInS: return null; goto PoJ1t; ST7dg: return static::where("\164\x6f\153\145\156", hash("\163\150\141\62\x35\66", $rEqQ3))->withInExpiration()->first(); goto fUW12; fUW12: Bhv6A: goto rO0jA; rO0jA: [$mcNIM, $rEqQ3] = explode("\x7c", $rEqQ3, 2); goto mUM5v; mhr0W: if (str_contains($rEqQ3, "\174")) { goto Bhv6A; } goto ST7dg; kN6zw: decP_: goto IKInS; GCImu: return hash_equals($gORgj->token, hash("\163\x68\141\x32\65\x36", $rEqQ3)) ? $gORgj : null; goto kN6zw; mUM5v: $gORgj = static::withInExpiration()->find($mcNIM); goto HX1za; PoJ1t: } public function scopeWithInExpiration($On229) { goto uPrQJ; gdrc0: $On229->when($s4WlZ, function ($zeBBR) use($s4WlZ) { $zeBBR->where("\x6c\x61\163\x74\137\x75\x73\x65\x64\x5f\x61\164", "\x3e\x3d", now()->subMinutes($s4WlZ)); $zeBBR->orWhereNull("\154\x61\163\x74\137\x75\x73\x65\144\137\x61\164"); }); goto tWZCJ; tWZCJ: return $On229; goto cZnbx; uPrQJ: $s4WlZ = config("\141\x64\155\151\156\x2e\141\165\164\150\x2e\164\157\x6b\x65\156\x5f\x65\170\x70\x69\162\x61\x74\x69\x6f\156"); goto gdrc0; cZnbx: } }
