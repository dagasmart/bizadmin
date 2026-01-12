<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $P_WCO = []) { $this->setConnection(Admin::config("\x61\144\155\x69\156\56\x64\141\x74\x61\142\x61\163\145\x2e\143\x6f\156\156\145\x63\x74\x69\157\x6e")); parent::__construct($P_WCO); } public static function findToken($lauVV) { goto UCfoB; t1sX_: return null; goto Kuyz8; ggunp: $GmxAG = static::withInExpiration()->find($HJGfV); goto MWcgI; MWcgI: if (!$GmxAG) { goto KyN0w; } goto kJRrV; kJRrV: return hash_equals($GmxAG->token, hash("\x73\150\x61\62\65\x36", $lauVV)) ? $GmxAG : null; goto kt0Wj; xwVot: nCrAu: goto rasD1; OH6iN: return static::where("\x74\x6f\153\x65\156", hash("\163\x68\141\62\x35\x36", $lauVV))->withInExpiration()->first(); goto xwVot; UCfoB: if (str_contains($lauVV, "\x7c")) { goto nCrAu; } goto OH6iN; rasD1: [$HJGfV, $lauVV] = explode("\x7c", $lauVV, 2); goto ggunp; kt0Wj: KyN0w: goto t1sX_; Kuyz8: } public function scopeWithInExpiration($pNlYO) { goto E3A1S; E3A1S: $Ft4u7 = config("\141\144\x6d\x69\x6e\56\x61\x75\164\150\56\164\157\153\x65\x6e\x5f\x65\x78\160\x69\x72\x61\x74\x69\x6f\x6e"); goto ZHJNP; Sh9Bb: return $pNlYO; goto rSxqS; ZHJNP: $pNlYO->when($Ft4u7, function ($KdgcE) use($Ft4u7) { $KdgcE->where("\154\141\x73\164\137\x75\163\x65\x64\137\141\x74", "\76\x3d", now()->subMinutes($Ft4u7)); $KdgcE->orWhereNull("\x6c\141\x73\164\x5f\x75\163\145\x64\137\141\164"); }); goto Sh9Bb; rSxqS: } }
