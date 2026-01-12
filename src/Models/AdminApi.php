<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:58              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\x74\145\x6d\160\x6c\141\164\145\137\x74\151\x74\x6c\145", "\x6d\x65\x74\x68\x6f\x64"); protected $casts = array("\x61\x72\x67\163" => "\152\x73\x6f\x6e"); const METHODS = array("\147\145\x74", "\150\x65\x61\144", "\160\x6f\163\x74", "\160\165\x74", "\x70\x61\164\143\150", "\x64\x65\154\x65\164\x65", "\x6f\x70\x74\x69\x6f\x6e\x73"); public function templateTitle() : Attribute { return Attribute::get(function () { goto Guydy; AEtzj: return ''; goto lxOLi; nIAP2: $dUR9E = app($this->template); goto RpVOK; RpVOK: return $dUR9E->getMethod() . "\40\55\x20" . $dUR9E->getTitle(); goto Vx4tP; JAT_q: RO9dU: goto nIAP2; OIp9N: return ''; goto JAT_q; lxOLi: JgEeK: goto AwEQ1; AwEQ1: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto RO9dU; } goto OIp9N; Guydy: if (class_exists($this->template)) { goto JgEeK; } goto AEtzj; Vx4tP: }); } public function method() : Attribute { return Attribute::get(function () { goto TcSzV; cUaJD: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto JH5e1; } goto ZvaBx; TcSzV: if (class_exists($this->template)) { goto uy7Hs; } goto QjOGR; a1bKD: return in_array($SVEFT, self::METHODS) ? $SVEFT : "\141\x6e\x79"; goto PQCNi; oiwS6: $SVEFT = app($this->template)->getMethod(); goto a1bKD; QjOGR: return ''; goto lTuhB; lTuhB: uy7Hs: goto cUaJD; PfVWa: JH5e1: goto oiwS6; ZvaBx: return "\x61\156\x79"; goto PfVWa; PQCNi: }); } }
