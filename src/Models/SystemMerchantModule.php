<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Support\Facades\DB; use DagaSmart\BizAdmin\Traits\CommonTrait; use Illuminate\Database\Eloquent\SoftDeletes; class SystemMerchantModule extends BaseModel { use CommonTrait, SoftDeletes; protected $table = "\x73\x79\163\x74\145\155\137\x6d\145\x72\143\150\141\156\164\x5f\155\x6f\x64\x75\154\145"; public function stateOption() { return [["\154\x61\x62\x65\x6c" => "\xe6\230\257", "\x76\x61\x6c\165\x65" => 1], ["\154\x61\142\x65\x6c" => "\xe5\220\246", "\166\141\154\x75\x65" => 0]]; } public function moduleOption() { goto AqP2p; AqP2p: $ZZSfL = []; goto CzZxK; bdii_: U9dCP: goto vWaqp; lD2Tt: $S8QYq = 0; goto F5dzI; F5dzI: array_walk($Jqp3H, function (&$AHvXX, $s_0_B) use(&$S8QYq, &$ZZSfL) { goto v4rW0; ukjEf: $S8QYq++; goto qHfi8; v4rW0: $ZZSfL[$S8QYq]["\x6c\x61\142\145\154"] = $s_0_B; goto uo1nM; uo1nM: $ZZSfL[$S8QYq]["\x76\x61\x6c\x75\x65"] = $s_0_B; goto ukjEf; qHfi8: }); goto bdii_; CzZxK: if (!($Jqp3H = $this->getModules())) { goto U9dCP; } goto lD2Tt; vWaqp: return $ZZSfL; goto W65v3; W65v3: } }
