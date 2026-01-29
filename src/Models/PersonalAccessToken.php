<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:22              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $O2dft = []) { $this->setConnection(Admin::config("\x61\144\155\x69\156\x2e\144\141\x74\141\142\x61\163\145\x2e\143\x6f\x6e\156\145\143\x74\x69\x6f\156")); parent::__construct($O2dft); } public static function findToken($whKv7) { goto P7fHk; VXA6L: return static::where("\x74\x6f\153\x65\x6e", hash("\163\x68\x61\x32\65\66", $whKv7))->withInExpiration()->first(); goto lPPwn; aWwCu: [$OYanf, $whKv7] = explode("\174", $whKv7, 2); goto xoD3p; vDjWl: return hash_equals($HuTWe->token, hash("\x73\150\141\62\65\x36", $whKv7)) ? $HuTWe : null; goto vq0m_; P7fHk: if (str_contains($whKv7, "\174")) { goto EtCLP; } goto VXA6L; BU9Fc: return null; goto lobCh; lPPwn: EtCLP: goto aWwCu; vq0m_: orvjk: goto BU9Fc; lgkUe: if (!$HuTWe) { goto orvjk; } goto vDjWl; xoD3p: $HuTWe = static::withInExpiration()->find($OYanf); goto lgkUe; lobCh: } public function scopeWithInExpiration($F5wSH) { goto CBdBr; YVXpe: return $F5wSH; goto ip1r_; NmGYs: $F5wSH->when($ITIPB, function ($QgeGR) use($ITIPB) { $QgeGR->where("\154\x61\163\164\137\165\163\145\x64\137\141\x74", "\76\x3d", now()->subMinutes($ITIPB)); $QgeGR->orWhereNull("\x6c\141\x73\x74\137\165\163\x65\x64\x5f\141\x74"); }); goto YVXpe; CBdBr: $ITIPB = config("\141\x64\155\x69\156\x2e\x61\x75\164\150\x2e\x74\x6f\x6b\145\x6e\137\x65\170\x70\x69\162\x61\x74\151\157\x6e"); goto NmGYs; ip1r_: } }
