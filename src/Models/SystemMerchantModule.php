<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Support\Facades\DB; use DagaSmart\BizAdmin\Traits\CommonTrait; use Illuminate\Database\Eloquent\SoftDeletes; class SystemMerchantModule extends BaseModel { use CommonTrait, SoftDeletes; protected $table = "\x73\171\163\164\145\155\x5f\x6d\x65\162\x63\x68\141\x6e\164\x5f\x6d\157\x64\165\x6c\x65"; public function stateOption() { return [["\154\141\x62\x65\x6c" => "\346\230\xaf", "\x76\141\154\165\x65" => 1], ["\154\141\x62\145\x6c" => "\345\x90\xa6", "\x76\141\x6c\165\145" => 0]]; } public function moduleOption() { goto TBWVc; TBWVc: $vRoDR = []; goto mlByK; IAHU2: rTjCx: goto SfUbe; SfUbe: return $vRoDR; goto F98Kk; mlByK: if (!($O8jm7 = $this->getModules())) { goto rTjCx; } goto LMq_9; G80lS: array_walk($O8jm7, function (&$PfrF0, $KrK3o) use(&$YS3rG, &$vRoDR) { goto Mm_2R; MSxi8: $vRoDR[$YS3rG]["\x76\x61\x6c\x75\145"] = $KrK3o; goto R2OK5; Mm_2R: $vRoDR[$YS3rG]["\154\x61\142\145\x6c"] = $KrK3o; goto MSxi8; R2OK5: $YS3rG++; goto vJKRo; vJKRo: }); goto IAHU2; LMq_9: $YS3rG = 0; goto G80lS; F98Kk: } }
