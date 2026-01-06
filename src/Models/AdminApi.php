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
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\164\x65\155\160\154\x61\164\145\x5f\x74\151\164\x6c\145", "\x6d\145\164\x68\157\x64"); protected $casts = array("\141\x72\x67\163" => "\x6a\163\157\x6e"); const METHODS = array("\147\x65\164", "\150\145\141\x64", "\160\x6f\x73\x74", "\160\x75\164", "\x70\141\164\x63\150", "\144\x65\x6c\145\164\x65", "\157\x70\164\x69\157\x6e\163"); public function templateTitle() : Attribute { return Attribute::get(function () { goto JPcXY; K2soq: fffRM: goto y8qLf; U9smy: return ''; goto K2soq; JPcXY: if (class_exists($this->template)) { goto fffRM; } goto U9smy; ZBj84: $e718Y = app($this->template); goto jotyW; y8qLf: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto gM1ps; } goto TWbtN; TWbtN: return ''; goto mE87E; mE87E: gM1ps: goto ZBj84; jotyW: return $e718Y->getMethod() . "\40\55\x20" . $e718Y->getTitle(); goto baH3v; baH3v: }); } public function method() : Attribute { return Attribute::get(function () { goto H5XiZ; H5XiZ: if (class_exists($this->template)) { goto LcOa5; } goto fhVsn; Fa0Gq: return "\x61\156\171"; goto iLINT; JdKF4: LcOa5: goto WZSgT; fhVsn: return ''; goto JdKF4; iLINT: ebc1S: goto UFkok; hHiBx: return in_array($H2xsA, self::METHODS) ? $H2xsA : "\x61\156\x79"; goto Sd1Mt; WZSgT: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto ebc1S; } goto Fa0Gq; UFkok: $H2xsA = app($this->template)->getMethod(); goto hHiBx; Sd1Mt: }); } }
