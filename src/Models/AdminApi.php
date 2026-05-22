<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\164\145\x6d\x70\154\141\x74\145\x5f\164\x69\164\154\145", "\x6d\145\164\150\x6f\144"); protected $casts = array("\141\162\x67\163" => "\152\x73\157\156"); const METHODS = array("\147\145\x74", "\150\145\141\144", "\160\x6f\x73\x74", "\160\165\x74", "\x70\141\164\x63\150", "\x64\x65\154\145\x74\145", "\157\x70\164\151\157\x6e\163"); public function templateTitle() : Attribute { return Attribute::get(function () { goto YNE8R; bZ0f7: return $s4PKi->getMethod() . "\x20\55\x20" . $s4PKi->getTitle(); goto unyXt; zJ9K_: obRVn: goto fBzfQ; qRve0: return ''; goto wgRMZ; YNE8R: if (class_exists($this->template)) { goto obRVn; } goto PTNDT; fBzfQ: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto OhIo2; } goto qRve0; PTNDT: return ''; goto zJ9K_; wgRMZ: OhIo2: goto yq91w; yq91w: $s4PKi = app($this->template); goto bZ0f7; unyXt: }); } public function method() : Attribute { return Attribute::get(function () { goto HPG0u; xibiW: return "\141\156\171"; goto M66ZN; JXUQt: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto o2uIy; } goto xibiW; HPG0u: if (class_exists($this->template)) { goto YPMYv; } goto Ux3MI; M66ZN: o2uIy: goto dV46J; dV46J: $sJodL = app($this->template)->getMethod(); goto FWD29; Kx5KY: YPMYv: goto JXUQt; Ux3MI: return ''; goto Kx5KY; FWD29: return in_array($sJodL, self::METHODS) ? $sJodL : "\141\156\171"; goto RNxCu; RNxCu: }); } }
