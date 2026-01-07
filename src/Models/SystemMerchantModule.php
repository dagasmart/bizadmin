<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Support\Facades\DB; use DagaSmart\BizAdmin\Traits\CommonTrait; use Illuminate\Database\Eloquent\SoftDeletes; class SystemMerchantModule extends BaseModel { use CommonTrait, SoftDeletes; protected $table = "\163\171\x73\x74\x65\x6d\x5f\155\x65\x72\x63\x68\141\156\x74\137\x6d\157\144\165\x6c\145"; public function stateOption() { return [["\154\x61\142\x65\154" => "\346\230\xaf", "\x76\x61\154\x75\x65" => 1], ["\154\141\142\145\154" => "\xe5\x90\246", "\166\141\154\165\x65" => 0]]; } public function moduleOption() { goto ynmlL; b_izy: T7OmE: goto mfmKQ; FUK6C: array_walk($izDlI, function (&$w0aoq, $UgLSm) use(&$nbxtl, &$TiLNg) { goto C71ng; rl3bt: $nbxtl++; goto FfwpC; TUAVM: $TiLNg[$nbxtl]["\166\x61\x6c\x75\x65"] = $UgLSm; goto rl3bt; C71ng: $TiLNg[$nbxtl]["\x6c\141\142\145\x6c"] = $UgLSm; goto TUAVM; FfwpC: }); goto b_izy; qdYEt: if (!($izDlI = $this->getModules())) { goto T7OmE; } goto k_rNA; mfmKQ: return $TiLNg; goto ZWPnM; k_rNA: $nbxtl = 0; goto FUK6C; ynmlL: $TiLNg = []; goto qdYEt; ZWPnM: } }
