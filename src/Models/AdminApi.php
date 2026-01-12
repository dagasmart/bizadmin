<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\x74\x65\x6d\x70\x6c\x61\164\145\x5f\x74\x69\x74\x6c\145", "\155\145\164\150\x6f\x64"); protected $casts = array("\141\162\x67\163" => "\152\x73\157\x6e"); const METHODS = array("\147\x65\164", "\150\x65\x61\144", "\160\x6f\163\164", "\x70\165\164", "\160\141\x74\x63\150", "\x64\x65\154\145\164\x65", "\x6f\160\x74\x69\157\x6e\x73"); public function templateTitle() : Attribute { return Attribute::get(function () { goto SaEmt; QvEiQ: return $yh7Gc->getMethod() . "\x20\55\x20" . $yh7Gc->getTitle(); goto DCrhb; HRFqg: qtPvr: goto lC7l7; SaEmt: if (class_exists($this->template)) { goto qtPvr; } goto dMljV; nW3b_: return ''; goto KNrnE; dMljV: return ''; goto HRFqg; KNrnE: LQ0HD: goto CvRve; lC7l7: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto LQ0HD; } goto nW3b_; CvRve: $yh7Gc = app($this->template); goto QvEiQ; DCrhb: }); } public function method() : Attribute { return Attribute::get(function () { goto u67wM; xGPVE: return "\141\x6e\x79"; goto XA3ke; u67wM: if (class_exists($this->template)) { goto DEIk4; } goto z4zfL; XA3ke: XcVA_: goto l16U9; xkUFu: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto XcVA_; } goto xGPVE; l16U9: $sPbzG = app($this->template)->getMethod(); goto ILxie; lROX1: DEIk4: goto xkUFu; ILxie: return in_array($sPbzG, self::METHODS) ? $sPbzG : "\x61\156\171"; goto IK2LQ; z4zfL: return ''; goto lROX1; IK2LQ: }); } }
