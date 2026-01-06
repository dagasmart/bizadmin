<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $cviQ0 = []) { $this->setConnection(Admin::config("\141\x64\155\x69\x6e\56\x64\141\164\141\142\x61\163\x65\x2e\x63\x6f\156\x6e\x65\x63\164\151\x6f\x6e")); parent::__construct($cviQ0); } public static function findToken($MXl1c) { goto dSjui; MR9Sg: RIwsu: goto TWlMZ; JiF74: return hash_equals($RM_Kf->token, hash("\x73\x68\141\x32\65\x36", $MXl1c)) ? $RM_Kf : null; goto u5nGC; UOU8A: $RM_Kf = static::withInExpiration()->find($oajkb); goto ie_Yd; TWlMZ: [$oajkb, $MXl1c] = explode("\x7c", $MXl1c, 2); goto UOU8A; mCYct: return null; goto dwAXu; dSjui: if (str_contains($MXl1c, "\x7c")) { goto RIwsu; } goto TQ0az; u5nGC: FMRFk: goto mCYct; TQ0az: return static::where("\x74\157\x6b\x65\156", hash("\163\150\x61\x32\x35\x36", $MXl1c))->withInExpiration()->first(); goto MR9Sg; ie_Yd: if (!$RM_Kf) { goto FMRFk; } goto JiF74; dwAXu: } public function scopeWithInExpiration($XP19u) { goto u3yB4; u3yB4: $BCOOO = config("\141\x64\x6d\151\156\56\141\x75\x74\x68\x2e\x74\x6f\153\145\x6e\x5f\x65\x78\x70\151\x72\x61\x74\x69\157\x6e"); goto dQSgG; IFg_M: return $XP19u; goto Z0M4v; dQSgG: $XP19u->when($BCOOO, function ($zR3fR) use($BCOOO) { $zR3fR->where("\x6c\141\163\x74\137\x75\x73\145\144\137\x61\164", "\76\75", now()->subMinutes($BCOOO)); $zR3fR->orWhereNull("\x6c\141\x73\x74\x5f\x75\163\x65\144\x5f\x61\164"); }); goto IFg_M; Z0M4v: } }
