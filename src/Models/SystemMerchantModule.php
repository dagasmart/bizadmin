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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Support\Facades\DB; use DagaSmart\BizAdmin\Traits\CommonTrait; use Illuminate\Database\Eloquent\SoftDeletes; class SystemMerchantModule extends BaseModel { use CommonTrait, SoftDeletes; protected $table = "\163\171\163\x74\145\x6d\137\155\x65\x72\143\x68\141\156\x74\137\x6d\157\x64\165\x6c\x65"; public function stateOption() { return [["\x6c\141\142\145\x6c" => "\xe6\x98\257", "\x76\x61\x6c\x75\x65" => 1], ["\154\141\142\x65\154" => "\xe5\220\246", "\166\x61\154\165\x65" => 0]]; } public function moduleOption() { goto RG7fk; RG7fk: $F4242 = []; goto aYkvS; aYkvS: if (!($vwSm9 = $this->getModules())) { goto gvN9F; } goto lIRgU; aoxko: array_walk($vwSm9, function (&$msRQo, $kqXIk) use(&$eVLXV, &$F4242) { goto ePGOj; f67or: $F4242[$eVLXV]["\x76\141\x6c\x75\145"] = $kqXIk; goto DSt4B; ePGOj: $F4242[$eVLXV]["\154\x61\x62\x65\x6c"] = $kqXIk; goto f67or; DSt4B: $eVLXV++; goto FobL0; FobL0: }); goto TLw_W; lIRgU: $eVLXV = 0; goto aoxko; TLw_W: gvN9F: goto A56GO; A56GO: return $F4242; goto Km1nF; Km1nF: } }
