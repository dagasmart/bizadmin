<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $O2dft = []) { $this->setConnection(Admin::config("\x61\x64\155\x69\156\56\144\141\x74\x61\x62\141\163\x65\56\x63\157\x6e\x6e\145\143\x74\151\157\156")); parent::__construct($O2dft); } public static function findToken($whKv7) { goto kROBL; uW4Yr: mOq2T: goto PUrN_; xdb2l: if (!$HuTWe) { goto CIcQm; } goto EACIr; PUrN_: [$OYanf, $whKv7] = explode("\174", $whKv7, 2); goto F2H37; QCHDl: return static::where("\164\157\x6b\x65\156", hash("\163\x68\x61\x32\65\x36", $whKv7))->withInExpiration()->first(); goto uW4Yr; kROBL: if (str_contains($whKv7, "\174")) { goto mOq2T; } goto QCHDl; wno7R: CIcQm: goto l1T7e; F2H37: $HuTWe = static::withInExpiration()->find($OYanf); goto xdb2l; EACIr: return hash_equals($HuTWe->token, hash("\x73\150\x61\x32\x35\x36", $whKv7)) ? $HuTWe : null; goto wno7R; l1T7e: return null; goto Fwg58; Fwg58: } public function scopeWithInExpiration($F5wSH) { goto vht7m; zw2l0: return $F5wSH; goto deKeI; vht7m: $ITIPB = config("\141\144\155\x69\156\56\141\x75\x74\150\x2e\164\x6f\153\145\x6e\137\145\x78\160\151\162\141\x74\151\157\156"); goto cTvBs; cTvBs: $F5wSH->when($ITIPB, function ($QgeGR) use($ITIPB) { $QgeGR->where("\x6c\141\x73\164\137\x75\x73\x65\144\137\x61\x74", "\x3e\x3d", now()->subMinutes($ITIPB)); $QgeGR->orWhereNull("\154\x61\163\164\x5f\165\163\145\144\x5f\141\x74"); }); goto zw2l0; deKeI: } }
