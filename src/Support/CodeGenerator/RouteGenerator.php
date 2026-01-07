<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($Mvvru) { goto NDmmg; oYKk0: T2nsO: goto FomTl; kZNV4: $VPPqg = "\x2f" . ltrim($Mvvru["\x72\x6f\165\164\145"], "\57"); goto GUxO5; oOeMu: $WsTun->store(["\164\151\164\x6c\x65" => $Mvvru["\164\x69\x74\x6c\145"], "\151\143\x6f\156" => $Mvvru["\x69\x63\157\x6e"], "\x70\141\x72\145\156\x74\137\x69\x64" => $Mvvru["\160\141\162\145\156\x74\x5f\151\x64"], "\165\x72\x6c" => $VPPqg, "\x63\x75\x73\x74\x6f\155\137\x6f\x72\144\145\162" => 100]); goto rXTkw; FomTl: Artisan::call("\141\x64\155\x69\x6e\72\x67\145\156\55\162\157\x75\x74\x65"); goto H4QXK; Q0Fm6: AK3MR: goto fVQl5; fVQl5: $WsTun = AdminMenuService::make(); goto kZNV4; rXTkw: ttRH6: goto TId03; Ofsp2: abort(500, $WsTun->getError()); goto oYKk0; TId03: if (!$WsTun->hasError()) { goto T2nsO; } goto Ofsp2; NDmmg: if ($Mvvru["\145\x6e\141\x62\x6c\x65\x64"]) { goto AK3MR; } goto Xx1RU; GUxO5: if ($WsTun->getModel()->query()->where("\165\x72\x6c", $VPPqg)->exists()) { goto ttRH6; } goto oOeMu; Xx1RU: return; goto Q0Fm6; H4QXK: } public static function refresh() { Artisan::call("\141\x64\155\151\x6e\x3a\147\145\156\x2d\x72\x6f\165\x74\145"); } }
