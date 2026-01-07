<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($Fx3Ya) { goto LjcLt; nxEi2: $pap97 = "\57" . ltrim($Fx3Ya["\x72\x6f\165\x74\145"], "\x2f"); goto RKN3R; s8xy5: DNuys: goto jEMdD; LjcLt: if ($Fx3Ya["\x65\156\x61\x62\154\145\x64"]) { goto abkql; } goto Lk5xr; jEMdD: Artisan::call("\x61\144\x6d\151\x6e\x3a\147\x65\156\55\x72\x6f\x75\164\x65"); goto o9Vso; VzXfK: abort(500, $C_o5C->getError()); goto s8xy5; QSHLj: abkql: goto EQ2FW; RKN3R: if ($C_o5C->getModel()->query()->where("\165\x72\154", $pap97)->exists()) { goto Tjkjv; } goto zch_f; zch_f: $C_o5C->store(["\x74\151\164\154\x65" => $Fx3Ya["\164\x69\x74\154\145"], "\151\x63\x6f\x6e" => $Fx3Ya["\151\143\x6f\156"], "\160\x61\162\145\x6e\x74\137\x69\144" => $Fx3Ya["\160\x61\162\x65\x6e\x74\137\x69\x64"], "\165\162\154" => $pap97, "\x63\x75\163\164\x6f\155\x5f\157\162\144\x65\x72" => 100]); goto qYovz; EQ2FW: $C_o5C = AdminMenuService::make(); goto nxEi2; gB01p: if (!$C_o5C->hasError()) { goto DNuys; } goto VzXfK; Lk5xr: return; goto QSHLj; qYovz: Tjkjv: goto gB01p; o9Vso: } public static function refresh() { Artisan::call("\141\144\155\151\x6e\72\x67\x65\x6e\55\x72\x6f\165\164\145"); } }
