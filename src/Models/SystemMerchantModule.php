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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Support\Facades\DB; use DagaSmart\BizAdmin\Traits\CommonTrait; use Illuminate\Database\Eloquent\SoftDeletes; class SystemMerchantModule extends BaseModel { use CommonTrait, SoftDeletes; protected $table = "\x73\171\x73\x74\145\155\x5f\x6d\x65\x72\x63\x68\x61\156\164\137\x6d\x6f\x64\165\154\145"; public function stateOption() { return [["\154\141\142\145\x6c" => "\346\230\xaf", "\166\x61\x6c\165\145" => 1], ["\x6c\x61\142\x65\154" => "\345\220\246", "\x76\141\x6c\165\x65" => 0]]; } public function moduleOption() { goto crUNf; GxtKS: array_walk($YULmN, function (&$JqsAq, $NkVp_) use(&$NtyWv, &$m63EW) { goto RBzqS; NJe_E: $m63EW[$NtyWv]["\x76\141\x6c\165\145"] = $NkVp_; goto J2Nkz; J2Nkz: $NtyWv++; goto h0550; RBzqS: $m63EW[$NtyWv]["\154\x61\142\x65\154"] = $NkVp_; goto NJe_E; h0550: }); goto nwY09; nwY09: IWBFR: goto msUyE; crUNf: $m63EW = []; goto ABQfi; i1XJb: $NtyWv = 0; goto GxtKS; msUyE: return $m63EW; goto eCYX_; ABQfi: if (!($YULmN = $this->getModules())) { goto IWBFR; } goto i1XJb; eCYX_: } }
