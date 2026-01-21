<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\164\145\x6d\160\154\x61\164\x65\137\x74\x69\164\x6c\x65", "\x6d\145\164\x68\x6f\144"); protected $casts = array("\x61\x72\147\163" => "\152\x73\x6f\156"); const METHODS = array("\147\145\164", "\150\x65\x61\x64", "\160\157\163\x74", "\x70\165\164", "\x70\x61\164\x63\x68", "\144\x65\x6c\145\164\x65", "\x6f\x70\x74\151\x6f\x6e\x73"); public function templateTitle() : Attribute { return Attribute::get(function () { goto RQq5K; W4Ip6: $s7hFN = app($this->template); goto kNxFm; MPUzP: return ''; goto D3vOV; kNxFm: return $s7hFN->getMethod() . "\x20\x2d\x20" . $s7hFN->getTitle(); goto FJyDj; a8zvU: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto Nxwis; } goto gIZ3q; D3vOV: vc9yv: goto a8zvU; RQq5K: if (class_exists($this->template)) { goto vc9yv; } goto MPUzP; gIZ3q: return ''; goto DG2PN; DG2PN: Nxwis: goto W4Ip6; FJyDj: }); } public function method() : Attribute { return Attribute::get(function () { goto FzxbG; WK35F: return "\141\x6e\x79"; goto j2vhs; FzxbG: if (class_exists($this->template)) { goto sNQPF; } goto TCvmP; TCvmP: return ''; goto w1mDP; j2vhs: LFAVB: goto Jw1fx; w1mDP: sNQPF: goto yXm2x; yXm2x: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto LFAVB; } goto WK35F; GM5ZS: return in_array($nE0rJ, self::METHODS) ? $nE0rJ : "\141\x6e\171"; goto WpXIs; Jw1fx: $nE0rJ = app($this->template)->getMethod(); goto GM5ZS; WpXIs: }); } }
