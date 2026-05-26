<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\x74\145\155\160\x6c\141\x74\145\137\164\151\x74\x6c\145", "\x6d\x65\x74\150\157\x64"); protected $casts = array("\x61\162\x67\163" => "\152\163\x6f\x6e"); const METHODS = array("\x67\145\164", "\150\145\x61\x64", "\x70\157\x73\x74", "\160\165\164", "\x70\141\164\143\150", "\x64\145\154\x65\164\x65", "\157\x70\x74\x69\157\156\163"); public function templateTitle() : Attribute { return Attribute::get(function () { goto GC6L8; HXYK6: b18j2: goto Ww8yu; w1xak: la8we: goto nnlOf; XZ1gG: return ''; goto HXYK6; wIPEp: return $s4PKi->getMethod() . "\40\55\x20" . $s4PKi->getTitle(); goto ZauMf; Ww8yu: $s4PKi = app($this->template); goto wIPEp; GC6L8: if (class_exists($this->template)) { goto la8we; } goto LQ0Li; LQ0Li: return ''; goto w1xak; nnlOf: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto b18j2; } goto XZ1gG; ZauMf: }); } public function method() : Attribute { return Attribute::get(function () { goto LJIk3; TU5Y0: return "\141\156\171"; goto SIzmK; DqmDh: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto RFcgc; } goto TU5Y0; dfoeE: $sJodL = app($this->template)->getMethod(); goto qJYtp; B2Hkv: return ''; goto ywZ3p; qJYtp: return in_array($sJodL, self::METHODS) ? $sJodL : "\x61\156\171"; goto OZ0De; ywZ3p: HNoiR: goto DqmDh; LJIk3: if (class_exists($this->template)) { goto HNoiR; } goto B2Hkv; SIzmK: RFcgc: goto dfoeE; OZ0De: }); } }
