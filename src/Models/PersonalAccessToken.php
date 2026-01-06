<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $VwJ_p = []) { $this->setConnection(Admin::config("\x61\144\155\x69\156\x2e\144\141\164\x61\142\x61\x73\145\x2e\x63\x6f\156\156\x65\143\x74\x69\x6f\x6e")); parent::__construct($VwJ_p); } public static function findToken($zCTt1) { goto kgI9Q; LHLEP: u6HvA: goto wmhyN; AD7rq: [$Iyvuu, $zCTt1] = explode("\x7c", $zCTt1, 2); goto p9AFk; p9AFk: $So_OC = static::withInExpiration()->find($Iyvuu); goto q8gog; q8gog: if (!$So_OC) { goto u6HvA; } goto jSurY; Hh1mt: efK1R: goto AD7rq; a1RQx: return static::where("\x74\157\153\x65\156", hash("\x73\x68\x61\62\x35\66", $zCTt1))->withInExpiration()->first(); goto Hh1mt; kgI9Q: if (str_contains($zCTt1, "\174")) { goto efK1R; } goto a1RQx; jSurY: return hash_equals($So_OC->token, hash("\x73\150\141\62\65\66", $zCTt1)) ? $So_OC : null; goto LHLEP; wmhyN: return null; goto QTjrI; QTjrI: } public function scopeWithInExpiration($gt6o4) { goto zxppI; yjWmp: $gt6o4->when($HwBiE, function ($fvbLK) use($HwBiE) { $fvbLK->where("\x6c\141\163\164\x5f\165\163\x65\144\x5f\141\164", "\76\x3d", now()->subMinutes($HwBiE)); $fvbLK->orWhereNull("\154\x61\163\x74\137\x75\x73\x65\x64\137\x61\164"); }); goto XT9PP; zxppI: $HwBiE = config("\x61\x64\155\x69\x6e\56\x61\165\164\150\56\x74\157\153\145\156\137\145\170\160\151\162\x61\x74\151\x6f\x6e"); goto yjWmp; XT9PP: return $gt6o4; goto ljAPB; ljAPB: } }
