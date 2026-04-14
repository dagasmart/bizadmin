<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\x74\x65\155\x70\154\x61\x74\x65\x5f\164\151\x74\154\145", "\155\145\164\x68\157\x64"); protected $casts = array("\141\x72\x67\x73" => "\152\x73\x6f\156"); const METHODS = array("\147\145\164", "\x68\x65\141\144", "\160\x6f\x73\164", "\x70\165\164", "\160\141\x74\x63\150", "\x64\x65\154\x65\164\x65", "\157\160\x74\151\157\156\163"); public function templateTitle() : Attribute { return Attribute::get(function () { goto ObWeC; KQuqn: return ''; goto DgmiD; Njn0V: hAKmR: goto xNd44; bu7To: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto hAKmR; } goto b1Q_l; b1Q_l: return ''; goto Njn0V; xNd44: $s4PKi = app($this->template); goto biaWj; biaWj: return $s4PKi->getMethod() . "\40\55\x20" . $s4PKi->getTitle(); goto AafnA; DgmiD: gfHv6: goto bu7To; ObWeC: if (class_exists($this->template)) { goto gfHv6; } goto KQuqn; AafnA: }); } public function method() : Attribute { return Attribute::get(function () { goto qG84q; evRTI: return "\x61\156\x79"; goto H3mb3; H3mb3: awYbC: goto KmTSv; dGa5T: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto awYbC; } goto evRTI; VgreA: YMTd3: goto dGa5T; qG84q: if (class_exists($this->template)) { goto YMTd3; } goto Z1FYp; KmTSv: $sJodL = app($this->template)->getMethod(); goto DoQWS; DoQWS: return in_array($sJodL, self::METHODS) ? $sJodL : "\x61\x6e\x79"; goto Xj8x9; Z1FYp: return ''; goto VgreA; Xj8x9: }); } }
