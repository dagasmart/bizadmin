<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($Ob1Sp) { goto wzAq_; nnMhM: $ON_Ph->store(["\x74\x69\x74\x6c\x65" => $Ob1Sp["\x74\x69\x74\x6c\145"], "\x69\143\x6f\x6e" => $Ob1Sp["\151\x63\x6f\x6e"], "\160\141\x72\145\x6e\x74\x5f\151\x64" => $Ob1Sp["\160\x61\x72\145\156\164\137\x69\x64"], "\165\162\x6c" => $ZKlJf, "\x63\x75\163\164\x6f\155\137\x6f\162\x64\x65\x72" => 100]); goto snoIW; gytLW: $ZKlJf = "\57" . ltrim($Ob1Sp["\x72\x6f\x75\164\x65"], "\x2f"); goto tRiGU; yeCx8: Artisan::call("\141\144\x6d\151\x6e\72\x67\x65\156\x2d\x72\x6f\165\x74\145"); goto K9y1d; hP_ET: abort(500, $ON_Ph->getError()); goto IATOp; wOok6: $ON_Ph = AdminMenuService::make(); goto gytLW; Annbi: NDC2N: goto wOok6; sRZ8r: return; goto Annbi; wzAq_: if ($Ob1Sp["\x65\156\141\x62\x6c\145\x64"]) { goto NDC2N; } goto sRZ8r; snoIW: ZLNVY: goto ehQSW; ehQSW: if (!$ON_Ph->hasError()) { goto yWVJm; } goto hP_ET; IATOp: yWVJm: goto yeCx8; tRiGU: if ($ON_Ph->getModel()->query()->where("\165\x72\154", $ZKlJf)->exists()) { goto ZLNVY; } goto nnMhM; K9y1d: } public static function refresh() { Artisan::call("\141\144\x6d\x69\156\x3a\147\145\x6e\x2d\x72\157\x75\x74\145"); } }
