<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:49              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($aP2If) { goto LeYko; XZpLW: aIEqm: goto dCitz; QaLL8: if ($aKyuK->getModel()->query()->where("\165\x72\x6c", $Z2e2Y)->exists()) { goto dscYD; } goto QrPxs; QrPxs: $aKyuK->store(["\164\151\164\154\145" => $aP2If["\x74\x69\x74\x6c\x65"], "\x69\x63\x6f\156" => $aP2If["\x69\x63\x6f\156"], "\160\141\162\145\x6e\x74\x5f\x69\144" => $aP2If["\160\x61\162\145\156\x74\x5f\151\144"], "\165\x72\x6c" => $Z2e2Y, "\143\x75\x73\164\x6f\x6d\x5f\157\x72\144\145\x72" => 100]); goto OpsTv; OpsTv: dscYD: goto tffjd; sse3F: pWavm: goto p6UTE; p6UTE: Artisan::call("\x61\144\155\x69\156\72\147\145\156\x2d\x72\x6f\165\x74\145"); goto IJuQH; LeYko: if ($aP2If["\x65\156\141\x62\x6c\145\x64"]) { goto aIEqm; } goto GH5Om; lGqiJ: abort(500, $aKyuK->getError()); goto sse3F; dCitz: $aKyuK = AdminMenuService::make(); goto f1f0P; tffjd: if (!$aKyuK->hasError()) { goto pWavm; } goto lGqiJ; f1f0P: $Z2e2Y = "\x2f" . ltrim($aP2If["\162\157\165\164\145"], "\x2f"); goto QaLL8; GH5Om: return; goto XZpLW; IJuQH: } public static function refresh() { Artisan::call("\141\144\155\x69\156\x3a\147\145\156\55\x72\157\165\x74\x65"); } }
