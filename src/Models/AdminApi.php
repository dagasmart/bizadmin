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
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\164\145\x6d\x70\154\x61\164\x65\137\x74\x69\164\x6c\145", "\x6d\145\x74\x68\x6f\x64"); protected $casts = array("\x61\x72\x67\x73" => "\152\163\157\x6e"); const METHODS = array("\147\145\164", "\150\x65\x61\x64", "\160\x6f\x73\164", "\x70\165\164", "\x70\141\164\x63\x68", "\x64\145\154\145\164\x65", "\157\x70\x74\x69\x6f\x6e\163"); public function templateTitle() : Attribute { return Attribute::get(function () { goto QRI3w; C_yww: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto xmF8x; } goto SUDKi; VWU6i: $bn17g = app($this->template); goto aqHBC; QRI3w: if (class_exists($this->template)) { goto tIcM0; } goto wcWOn; wcWOn: return ''; goto EqOWQ; SUDKi: return ''; goto sfeLJ; aqHBC: return $bn17g->getMethod() . "\x20\x2d\x20" . $bn17g->getTitle(); goto HNckx; sfeLJ: xmF8x: goto VWU6i; EqOWQ: tIcM0: goto C_yww; HNckx: }); } public function method() : Attribute { return Attribute::get(function () { goto YTRHp; mUMnF: $pMJlN = app($this->template)->getMethod(); goto FgtGb; FgtGb: return in_array($pMJlN, self::METHODS) ? $pMJlN : "\x61\x6e\x79"; goto Xf5nW; PVwIf: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto kKnan; } goto ru4aE; ru4aE: return "\x61\156\171"; goto mnBHP; EfW2v: CuvVs: goto PVwIf; mnBHP: kKnan: goto mUMnF; Or4u8: return ''; goto EfW2v; YTRHp: if (class_exists($this->template)) { goto CuvVs; } goto Or4u8; Xf5nW: }); } }
