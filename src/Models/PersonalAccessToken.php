<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $O2dft = []) { $this->setConnection(Admin::config("\141\x64\155\151\x6e\x2e\144\x61\x74\x61\x62\141\x73\145\56\x63\x6f\156\x6e\145\143\164\151\x6f\x6e")); parent::__construct($O2dft); } public static function findToken($whKv7) { goto hVBmB; p1vTm: return hash_equals($HuTWe->token, hash("\163\150\141\62\65\66", $whKv7)) ? $HuTWe : null; goto dyH2_; kJUzZ: X7xFj: goto ADm6e; hVBmB: if (str_contains($whKv7, "\174")) { goto X7xFj; } goto HKudF; oXN0a: $HuTWe = static::withInExpiration()->find($OYanf); goto nvss3; HKudF: return static::where("\x74\157\153\x65\156", hash("\x73\x68\141\x32\x35\66", $whKv7))->withInExpiration()->first(); goto kJUzZ; rjtH7: return null; goto wKUAW; dyH2_: rzbyO: goto rjtH7; nvss3: if (!$HuTWe) { goto rzbyO; } goto p1vTm; ADm6e: [$OYanf, $whKv7] = explode("\174", $whKv7, 2); goto oXN0a; wKUAW: } public function scopeWithInExpiration($F5wSH) { goto c7ccL; LJS4I: return $F5wSH; goto SQr8T; c7ccL: $ITIPB = config("\141\144\155\x69\x6e\x2e\141\165\x74\x68\56\x74\x6f\x6b\x65\156\x5f\x65\x78\160\151\x72\x61\164\x69\157\156"); goto GHsx8; GHsx8: $F5wSH->when($ITIPB, function ($QgeGR) use($ITIPB) { $QgeGR->where("\x6c\141\163\x74\x5f\x75\163\145\x64\137\x61\164", "\76\x3d", now()->subMinutes($ITIPB)); $QgeGR->orWhereNull("\x6c\x61\x73\x74\x5f\x75\x73\145\144\x5f\141\x74"); }); goto LJS4I; SQr8T: } }
