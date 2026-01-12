<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:00              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($oV0Dr) { goto jzVob; FR6fU: if (!$y8rJ7->hasError()) { goto CdXIG; } goto bfR3c; yPo6K: $y8rJ7 = AdminMenuService::make(); goto fvEWM; v8tB0: $y8rJ7->store(["\164\x69\x74\x6c\x65" => $oV0Dr["\164\151\x74\x6c\x65"], "\151\143\x6f\156" => $oV0Dr["\151\x63\x6f\156"], "\160\x61\162\145\156\x74\x5f\151\144" => $oV0Dr["\x70\x61\162\x65\156\164\x5f\151\144"], "\165\162\x6c" => $xUFhG, "\143\165\x73\x74\x6f\155\137\157\x72\x64\145\162" => 100]); goto vtK6w; bfR3c: abort(500, $y8rJ7->getError()); goto Vlish; vtK6w: Nhw5x: goto FR6fU; ue3qz: return; goto r8jnD; U8aAO: Artisan::call("\141\x64\155\x69\x6e\x3a\147\145\156\x2d\x72\157\165\164\x65"); goto BCtf_; Vlish: CdXIG: goto U8aAO; r8jnD: Qfevz: goto yPo6K; ZKnyT: if ($y8rJ7->getModel()->query()->where("\165\162\154", $xUFhG)->exists()) { goto Nhw5x; } goto v8tB0; jzVob: if ($oV0Dr["\x65\x6e\x61\x62\154\x65\144"]) { goto Qfevz; } goto ue3qz; fvEWM: $xUFhG = "\x2f" . ltrim($oV0Dr["\162\157\165\x74\145"], "\57"); goto ZKnyT; BCtf_: } public static function refresh() { Artisan::call("\141\144\155\151\x6e\x3a\147\x65\x6e\x2d\162\157\165\x74\145"); } }
