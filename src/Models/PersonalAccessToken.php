<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $idkBx = []) { $this->setConnection(Admin::config("\141\144\x6d\151\156\56\144\x61\164\x61\x62\x61\163\145\56\x63\x6f\156\156\x65\143\x74\151\x6f\156")); parent::__construct($idkBx); } public static function findToken($OMFMJ) { goto EYZdR; uWbqy: if (!$fCQVY) { goto bFzvd; } goto ZysA3; cWync: bFzvd: goto SYjXc; EYZdR: if (str_contains($OMFMJ, "\x7c")) { goto B9uVp; } goto hTfGd; rtR7W: B9uVp: goto EkGtg; SYjXc: return null; goto yM3lI; EkGtg: [$VRy5M, $OMFMJ] = explode("\174", $OMFMJ, 2); goto r1YVU; ZysA3: return hash_equals($fCQVY->token, hash("\163\150\141\x32\65\66", $OMFMJ)) ? $fCQVY : null; goto cWync; hTfGd: return static::where("\164\157\x6b\145\x6e", hash("\163\x68\x61\62\65\66", $OMFMJ))->withInExpiration()->first(); goto rtR7W; r1YVU: $fCQVY = static::withInExpiration()->find($VRy5M); goto uWbqy; yM3lI: } public function scopeWithInExpiration($w140e) { goto tfJq_; tfJq_: $VooJl = config("\x61\x64\x6d\x69\x6e\x2e\141\165\164\x68\56\164\157\153\x65\156\137\145\x78\x70\x69\x72\141\164\x69\157\156"); goto Qx478; pIrvG: return $w140e; goto ObT0S; Qx478: $w140e->when($VooJl, function ($C4ND0) use($VooJl) { $C4ND0->where("\154\x61\x73\164\x5f\165\x73\x65\144\137\x61\164", "\x3e\x3d", now()->subMinutes($VooJl)); $C4ND0->orWhereNull("\154\141\x73\x74\137\x75\x73\x65\x64\x5f\x61\x74"); }); goto pIrvG; ObT0S: } }
