<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($Z2cqW) { goto N695T; OsbAo: $mWCFv->store(["\164\x69\x74\x6c\145" => $Z2cqW["\164\151\x74\154\145"], "\x69\x63\157\156" => $Z2cqW["\x69\x63\x6f\x6e"], "\160\x61\162\145\x6e\x74\137\x69\144" => $Z2cqW["\160\x61\162\145\156\164\137\151\144"], "\165\162\154" => $rghx2, "\143\165\x73\x74\x6f\155\137\157\x72\x64\x65\162" => 100]); goto IQA2_; KOYLZ: if (!$mWCFv->hasError()) { goto s9yTV; } goto inNAQ; Mtsmw: QvQjy: goto Se6jt; IQA2_: b5SIR: goto KOYLZ; N695T: if ($Z2cqW["\145\x6e\x61\142\154\x65\144"]) { goto QvQjy; } goto JOCpz; MBILW: s9yTV: goto VYwTc; Se6jt: $mWCFv = AdminMenuService::make(); goto Kw16n; Kw16n: $rghx2 = "\x2f" . ltrim($Z2cqW["\x72\157\x75\164\145"], "\x2f"); goto SzFp3; SzFp3: if ($mWCFv->getModel()->query()->where("\x75\x72\154", $rghx2)->exists()) { goto b5SIR; } goto OsbAo; VYwTc: Artisan::call("\x61\x64\x6d\x69\156\x3a\x67\145\x6e\x2d\x72\x6f\165\x74\145"); goto sZPx0; inNAQ: abort(500, $mWCFv->getError()); goto MBILW; JOCpz: return; goto Mtsmw; sZPx0: } public static function refresh() { Artisan::call("\x61\144\x6d\x69\156\72\x67\x65\156\x2d\x72\x6f\165\x74\x65"); } }
