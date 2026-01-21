<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; use DagaSmart\BizAdmin\Admin; class PersonalAccessToken extends SanctumPersonalAccessToken { public function __construct(array $L5G_M = []) { $this->setConnection(Admin::config("\141\144\x6d\x69\156\x2e\144\141\164\141\142\141\163\x65\56\x63\157\x6e\x6e\145\143\164\x69\157\x6e")); parent::__construct($L5G_M); } public static function findToken($DOTOK) { goto qoTJD; LJhRQ: $cas0e = static::withInExpiration()->find($zoSh_); goto hb2iR; rBE1n: return hash_equals($cas0e->token, hash("\x73\150\141\62\65\x36", $DOTOK)) ? $cas0e : null; goto F30_d; hb2iR: if (!$cas0e) { goto X1ic0; } goto rBE1n; xF4TN: return static::where("\x74\157\153\145\156", hash("\163\x68\141\x32\65\x36", $DOTOK))->withInExpiration()->first(); goto cnxjm; F30_d: X1ic0: goto OfnU2; cWuf7: [$zoSh_, $DOTOK] = explode("\174", $DOTOK, 2); goto LJhRQ; qoTJD: if (str_contains($DOTOK, "\x7c")) { goto Fb4_e; } goto xF4TN; OfnU2: return null; goto LMNyt; cnxjm: Fb4_e: goto cWuf7; LMNyt: } public function scopeWithInExpiration($UjlOj) { goto eMXNI; wxWuI: $UjlOj->when($ZEwr8, function ($L7BYc) use($ZEwr8) { $L7BYc->where("\154\x61\x73\164\137\165\163\x65\144\x5f\141\x74", "\x3e\75", now()->subMinutes($ZEwr8)); $L7BYc->orWhereNull("\x6c\x61\x73\x74\x5f\x75\163\x65\144\x5f\x61\164"); }); goto c2wlY; c2wlY: return $UjlOj; goto x7ujt; eMXNI: $ZEwr8 = config("\141\144\x6d\151\x6e\56\141\165\x74\150\56\x74\x6f\x6b\x65\156\137\x65\x78\x70\151\x72\x61\164\151\x6f\x6e"); goto wxWuI; x7ujt: } }
