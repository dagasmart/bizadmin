<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($D1fuY) { goto lvWel; JYoqC: kEGrx: goto wedBe; Jjtif: $b25zg = AdminMenuService::make(); goto vKCoM; V1_dm: abort(500, $b25zg->getError()); goto JYoqC; YmjG4: return; goto rVee7; lvWel: if ($D1fuY["\x65\x6e\141\142\154\x65\x64"]) { goto les16; } goto YmjG4; vKCoM: $dOpq_ = "\57" . ltrim($D1fuY["\162\157\165\164\x65"], "\57"); goto a2LlG; rVee7: les16: goto Jjtif; VW0Zx: $b25zg->store(["\x74\151\x74\154\x65" => $D1fuY["\164\x69\164\154\145"], "\151\143\157\x6e" => $D1fuY["\151\x63\x6f\156"], "\x70\x61\x72\145\156\x74\137\x69\144" => $D1fuY["\x70\x61\x72\145\x6e\x74\137\x69\144"], "\x75\162\x6c" => $dOpq_, "\x63\165\163\x74\x6f\x6d\x5f\157\x72\144\145\x72" => 100]); goto VHmVS; BVtCZ: if (!$b25zg->hasError()) { goto kEGrx; } goto V1_dm; VHmVS: R_WYB: goto BVtCZ; a2LlG: if ($b25zg->getModel()->query()->where("\x75\x72\x6c", $dOpq_)->exists()) { goto R_WYB; } goto VW0Zx; wedBe: Artisan::call("\141\144\x6d\151\156\x3a\147\145\156\x2d\x72\x6f\165\164\x65"); goto aCNYs; aCNYs: } public static function refresh() { Artisan::call("\141\144\155\x69\x6e\x3a\x67\145\156\55\162\157\165\164\145"); } }
