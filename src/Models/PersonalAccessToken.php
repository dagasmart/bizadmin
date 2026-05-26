<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $O2dft = []) { $this->setConnection(Admin::config("\x61\144\155\151\x6e\x2e\x64\141\x74\x61\x62\141\x73\145\x2e\143\157\156\156\145\x63\164\151\157\156")); parent::__construct($O2dft); } public static function findToken($whKv7) { goto GsLDB; w6fab: $HuTWe = static::withInExpiration()->find($OYanf); goto Y4_Zk; l7Sc8: return hash_equals($HuTWe->token, hash("\163\x68\141\x32\x35\66", $whKv7)) ? $HuTWe : null; goto jlLuh; GsLDB: if (str_contains($whKv7, "\174")) { goto LoYwp; } goto ScVAe; Y4_Zk: if (!$HuTWe) { goto LsAPE; } goto l7Sc8; IxNwE: LoYwp: goto zeGat; zeGat: [$OYanf, $whKv7] = explode("\x7c", $whKv7, 2); goto w6fab; jlLuh: LsAPE: goto UPq7e; UPq7e: return null; goto oyuEV; ScVAe: return static::where("\164\x6f\x6b\145\156", hash("\163\x68\x61\62\65\66", $whKv7))->withInExpiration()->first(); goto IxNwE; oyuEV: } public function scopeWithInExpiration($F5wSH) { goto IKNhY; gle0a: $F5wSH->when($ITIPB, function ($QgeGR) use($ITIPB) { $QgeGR->where("\154\141\163\164\x5f\165\x73\x65\x64\x5f\141\x74", "\x3e\x3d", now()->subMinutes($ITIPB)); $QgeGR->orWhereNull("\154\x61\163\x74\x5f\x75\x73\x65\x64\137\x61\164"); }); goto RkSj_; IKNhY: $ITIPB = config("\x61\144\155\151\x6e\56\141\165\x74\150\x2e\164\x6f\x6b\x65\x6e\x5f\145\x78\160\151\162\x61\x74\151\x6f\x6e"); goto gle0a; RkSj_: return $F5wSH; goto lxNJz; lxNJz: } }
