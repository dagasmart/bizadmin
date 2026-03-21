<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:29              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $ZG2_m = []) { $this->setConnection(Admin::config("\x61\x64\x6d\x69\x6e\56\x64\x61\164\141\142\141\x73\x65\56\143\x6f\x6e\x6e\145\x63\164\x69\157\156")); parent::__construct($ZG2_m); } public static function findToken($bUlK9) { goto RukyM; dakuV: [$nxnQX, $bUlK9] = explode("\x7c", $bUlK9, 2); goto I9gRU; sxoWk: return static::where("\x74\157\153\x65\x6e", hash("\163\x68\141\62\x35\66", $bUlK9))->withInExpiration()->first(); goto QHcAX; e3oT7: return hash_equals($FOUCX->token, hash("\x73\150\x61\x32\x35\66", $bUlK9)) ? $FOUCX : null; goto LFUxB; RukyM: if (str_contains($bUlK9, "\x7c")) { goto SPisW; } goto sxoWk; bGnw9: if (!$FOUCX) { goto YNUte; } goto e3oT7; I9gRU: $FOUCX = static::withInExpiration()->find($nxnQX); goto bGnw9; QHcAX: SPisW: goto dakuV; LFUxB: YNUte: goto H9PHv; H9PHv: return null; goto vFrhs; vFrhs: } public function scopeWithInExpiration($cSoU0) { goto geP6h; oZlTY: return $cSoU0; goto rnSBp; geP6h: $FGLwy = config("\x61\x64\x6d\x69\156\56\x61\x75\x74\150\x2e\x74\157\153\x65\x6e\137\145\x78\x70\151\x72\141\164\151\157\x6e"); goto klQ0H; klQ0H: $cSoU0->when($FGLwy, function ($KCaDl) use($FGLwy) { $KCaDl->where("\154\141\163\164\x5f\165\x73\x65\144\x5f\141\x74", "\x3e\75", now()->subMinutes($FGLwy)); $KCaDl->orWhereNull("\154\141\x73\164\137\165\x73\x65\x64\137\141\164"); }); goto oZlTY; rnSBp: } }
