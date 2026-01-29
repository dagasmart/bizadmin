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
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\164\x65\x6d\x70\x6c\141\164\145\137\164\x69\x74\x6c\145", "\x6d\x65\164\150\x6f\144"); protected $casts = array("\141\162\147\x73" => "\x6a\x73\x6f\156"); const METHODS = array("\147\145\164", "\x68\x65\141\x64", "\160\x6f\x73\164", "\160\165\x74", "\x70\141\x74\x63\x68", "\x64\145\x6c\145\x74\145", "\157\160\164\151\157\156\163"); public function templateTitle() : Attribute { return Attribute::get(function () { goto jKN1i; JgJnV: qMlVu: goto X03tt; EJrHs: rSCBN: goto SpLJo; WjwMl: return ''; goto EJrHs; Axscn: return ''; goto JgJnV; SpLJo: $Ki_F1 = app($this->template); goto lWijc; jKN1i: if (class_exists($this->template)) { goto qMlVu; } goto Axscn; lWijc: return $Ki_F1->getMethod() . "\40\x2d\40" . $Ki_F1->getTitle(); goto Tz1_2; X03tt: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto rSCBN; } goto WjwMl; Tz1_2: }); } public function method() : Attribute { return Attribute::get(function () { goto iOL5T; M6pQ1: $V_yoa = app($this->template)->getMethod(); goto xHh_s; Ly5tn: D2QJt: goto M6pQ1; tqoUH: return ''; goto WhcF8; UFXis: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto D2QJt; } goto Ga6mZ; Ga6mZ: return "\141\156\171"; goto Ly5tn; xHh_s: return in_array($V_yoa, self::METHODS) ? $V_yoa : "\x61\x6e\x79"; goto ngvp5; WhcF8: sD_h0: goto UFXis; iOL5T: if (class_exists($this->template)) { goto sD_h0; } goto tqoUH; ngvp5: }); } }
