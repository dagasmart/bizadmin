<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:30              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $GYpq1 = []) { $this->setConnection(Admin::config("\x61\144\155\151\x6e\x2e\x64\x61\x74\x61\x62\141\163\x65\x2e\143\x6f\x6e\x6e\145\x63\164\x69\x6f\x6e")); parent::__construct($GYpq1); } public static function findToken($K0UG6) { goto xMTKm; AZHk8: [$zLPTk, $K0UG6] = explode("\174", $K0UG6, 2); goto TvyHR; OOqqp: if (!$CIPdn) { goto D4IWT; } goto wVg8P; auU3k: return null; goto Xcv6b; qybOv: D4IWT: goto auU3k; TvyHR: $CIPdn = static::withInExpiration()->find($zLPTk); goto OOqqp; SeRWU: return static::where("\164\x6f\x6b\x65\156", hash("\163\x68\x61\x32\x35\66", $K0UG6))->withInExpiration()->first(); goto Wrcf5; xMTKm: if (str_contains($K0UG6, "\x7c")) { goto gcNB2; } goto SeRWU; wVg8P: return hash_equals($CIPdn->token, hash("\163\150\141\62\x35\x36", $K0UG6)) ? $CIPdn : null; goto qybOv; Wrcf5: gcNB2: goto AZHk8; Xcv6b: } public function scopeWithInExpiration($LCYGD) { goto VV5Ma; J9V4i: return $LCYGD; goto iGtdj; VV5Ma: $qAGdJ = config("\141\x64\x6d\151\x6e\56\141\x75\x74\x68\56\164\x6f\x6b\145\156\x5f\x65\x78\160\151\162\141\x74\151\157\x6e"); goto BseE2; BseE2: $LCYGD->when($qAGdJ, function ($x94op) use($qAGdJ) { $x94op->where("\154\141\x73\x74\137\x75\x73\145\144\x5f\x61\x74", "\76\x3d", now()->subMinutes($qAGdJ)); $x94op->orWhereNull("\x6c\141\x73\164\x5f\165\x73\x65\x64\x5f\141\x74"); }); goto J9V4i; iGtdj: } }
