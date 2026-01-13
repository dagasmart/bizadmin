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
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\164\x65\x6d\x70\x6c\141\x74\x65\137\164\x69\x74\154\x65", "\155\145\x74\150\157\x64"); protected $casts = array("\x61\162\x67\x73" => "\152\163\157\x6e"); const METHODS = array("\x67\x65\164", "\x68\145\x61\x64", "\x70\157\163\164", "\x70\165\164", "\x70\141\164\143\150", "\144\x65\x6c\145\164\x65", "\x6f\160\164\151\157\x6e\x73"); public function templateTitle() : Attribute { return Attribute::get(function () { goto iz7hg; aTN5P: $jo_BC = app($this->template); goto gknYF; M1H9l: return ''; goto WdMRV; X6M9j: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto Sv1id; } goto M1H9l; IrMnc: return ''; goto Sjc3a; gknYF: return $jo_BC->getMethod() . "\40\x2d\40" . $jo_BC->getTitle(); goto alaeB; WdMRV: Sv1id: goto aTN5P; Sjc3a: WYxtd: goto X6M9j; iz7hg: if (class_exists($this->template)) { goto WYxtd; } goto IrMnc; alaeB: }); } public function method() : Attribute { return Attribute::get(function () { goto NESZB; w9jOI: return "\141\x6e\x79"; goto cvqTZ; NESZB: if (class_exists($this->template)) { goto Lbd1u; } goto Iji9H; nUD3o: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto e8XWL; } goto w9jOI; k71kb: $mDWSz = app($this->template)->getMethod(); goto dW_qO; dW_qO: return in_array($mDWSz, self::METHODS) ? $mDWSz : "\x61\156\x79"; goto kd_5Z; cvqTZ: e8XWL: goto k71kb; Hq4gh: Lbd1u: goto nUD3o; Iji9H: return ''; goto Hq4gh; kd_5Z: }); } }
