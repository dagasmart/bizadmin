<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:58              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $ardNk = []) { $this->setConnection(Admin::config("\x61\x64\155\151\x6e\56\144\x61\164\x61\x62\x61\163\x65\x2e\x63\x6f\x6e\156\145\x63\x74\151\x6f\156")); parent::__construct($ardNk); } public static function findToken($zQxHo) { goto f8ue2; pTS0A: return null; goto DHcUM; AwSiA: $GMa21 = static::withInExpiration()->find($ffnWO); goto KyOUD; KyOUD: if (!$GMa21) { goto pf1Jv; } goto D77vT; LBD5s: return static::where("\164\157\x6b\x65\x6e", hash("\x73\150\141\x32\65\66", $zQxHo))->withInExpiration()->first(); goto jj7Yo; f8ue2: if (str_contains($zQxHo, "\174")) { goto uBik7; } goto LBD5s; D77vT: return hash_equals($GMa21->token, hash("\163\150\141\62\x35\x36", $zQxHo)) ? $GMa21 : null; goto OcYhe; OcYhe: pf1Jv: goto pTS0A; jj7Yo: uBik7: goto c2F15; c2F15: [$ffnWO, $zQxHo] = explode("\174", $zQxHo, 2); goto AwSiA; DHcUM: } public function scopeWithInExpiration($C35Ce) { goto T0DL1; T0DL1: $wXTjC = config("\141\144\x6d\x69\156\x2e\141\165\x74\150\x2e\x74\x6f\x6b\x65\x6e\137\x65\x78\160\x69\x72\141\164\x69\x6f\x6e"); goto DO0Rv; F80GW: return $C35Ce; goto sK8zB; DO0Rv: $C35Ce->when($wXTjC, function ($pxd2Y) use($wXTjC) { $pxd2Y->where("\154\141\x73\164\x5f\165\x73\x65\144\137\141\164", "\x3e\75", now()->subMinutes($wXTjC)); $pxd2Y->orWhereNull("\x6c\141\x73\x74\x5f\165\163\x65\144\137\x61\164"); }); goto F80GW; sK8zB: } }
