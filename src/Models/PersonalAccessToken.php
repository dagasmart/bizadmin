<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $ngYLn = []) { $this->setConnection(Admin::config("\141\x64\x6d\x69\156\56\x64\x61\x74\141\x62\141\163\x65\56\143\157\x6e\156\x65\143\164\x69\157\x6e")); parent::__construct($ngYLn); } public static function findToken($GJjOV) { goto U3iRu; U3iRu: if (str_contains($GJjOV, "\174")) { goto aTx_7; } goto uIaaP; NJVK3: [$iGDeb, $GJjOV] = explode("\x7c", $GJjOV, 2); goto DPkUG; Ekeu4: aTx_7: goto NJVK3; DPkUG: $Tkw3H = static::withInExpiration()->find($iGDeb); goto Qhtwj; gt9Tb: return hash_equals($Tkw3H->token, hash("\163\150\x61\x32\x35\66", $GJjOV)) ? $Tkw3H : null; goto o18tO; Qhtwj: if (!$Tkw3H) { goto dqoeD; } goto gt9Tb; uIaaP: return static::where("\x74\x6f\153\145\156", hash("\x73\x68\x61\62\65\66", $GJjOV))->withInExpiration()->first(); goto Ekeu4; BzusI: return null; goto yX1oC; o18tO: dqoeD: goto BzusI; yX1oC: } public function scopeWithInExpiration($Ye93s) { goto xnqTp; RbdmH: return $Ye93s; goto yCE49; xnqTp: $fGZh1 = config("\x61\144\155\151\x6e\56\x61\x75\x74\x68\56\x74\x6f\153\x65\x6e\137\x65\170\160\x69\162\141\x74\151\157\x6e"); goto Eec5Y; Eec5Y: $Ye93s->when($fGZh1, function ($E9Z9Z) use($fGZh1) { $E9Z9Z->where("\154\141\x73\x74\x5f\x75\163\145\144\x5f\x61\x74", "\x3e\75", now()->subMinutes($fGZh1)); $E9Z9Z->orWhereNull("\x6c\x61\x73\x74\137\x75\163\x65\144\x5f\x61\164"); }); goto RbdmH; yCE49: } }
