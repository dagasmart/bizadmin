<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:28              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\164\x65\155\160\154\141\x74\x65\x5f\x74\151\164\x6c\145", "\x6d\x65\x74\150\x6f\144"); protected $casts = array("\141\x72\147\163" => "\152\163\x6f\x6e"); const METHODS = array("\x67\145\164", "\150\x65\x61\x64", "\x70\x6f\163\x74", "\160\x75\x74", "\x70\x61\164\143\150", "\144\145\x6c\x65\x74\x65", "\x6f\x70\164\151\x6f\156\163"); public function templateTitle() : Attribute { return Attribute::get(function () { goto joLcS; HZe0G: return ''; goto ylbcX; Z1NuB: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto Q9rpf; } goto Vx2Kn; Vx2Kn: return ''; goto rlZA9; rlZA9: Q9rpf: goto v9RVC; YjryA: return $yXxid->getMethod() . "\x20\x2d\40" . $yXxid->getTitle(); goto HrQBb; ylbcX: U4BGN: goto Z1NuB; v9RVC: $yXxid = app($this->template); goto YjryA; joLcS: if (class_exists($this->template)) { goto U4BGN; } goto HZe0G; HrQBb: }); } public function method() : Attribute { return Attribute::get(function () { goto b2a82; b2a82: if (class_exists($this->template)) { goto D9Soj; } goto r7EpQ; r7EpQ: return ''; goto tMb7T; pZV1K: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto svpMd; } goto JMHLu; tMb7T: D9Soj: goto pZV1K; JMHLu: return "\141\x6e\171"; goto lx6jc; brd1d: return in_array($u3OkQ, self::METHODS) ? $u3OkQ : "\141\156\171"; goto Nmu93; BnGXZ: $u3OkQ = app($this->template)->getMethod(); goto brd1d; lx6jc: svpMd: goto BnGXZ; Nmu93: }); } }
