<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($Iva2e) { goto laxku; CPMXj: I2gT6: goto k8QdJ; k8QdJ: $Sk6qZ = AdminMenuService::make(); goto LwaVw; wc0Ae: Artisan::call("\x61\144\155\x69\156\x3a\147\x65\x6e\x2d\162\157\165\x74\145"); goto RXahY; q0PRz: abort(500, $Sk6qZ->getError()); goto hHgSf; hHgSf: MTKb1: goto wc0Ae; Mtk_L: tg2Rw: goto UOipi; LwaVw: $gjFrl = "\57" . ltrim($Iva2e["\162\x6f\x75\164\145"], "\57"); goto gDcxc; UOipi: if (!$Sk6qZ->hasError()) { goto MTKb1; } goto q0PRz; gDcxc: if ($Sk6qZ->getModel()->query()->where("\x75\x72\154", $gjFrl)->exists()) { goto tg2Rw; } goto tuuLM; tuuLM: $Sk6qZ->store(["\x74\151\164\154\x65" => $Iva2e["\164\x69\x74\154\145"], "\151\x63\x6f\x6e" => $Iva2e["\x69\x63\x6f\156"], "\160\141\x72\x65\x6e\x74\x5f\x69\144" => $Iva2e["\x70\141\162\x65\x6e\x74\137\x69\144"], "\165\x72\x6c" => $gjFrl, "\143\x75\163\164\x6f\155\137\x6f\x72\144\145\x72" => 100]); goto Mtk_L; laxku: if ($Iva2e["\145\x6e\x61\142\154\x65\x64"]) { goto I2gT6; } goto HP1tl; HP1tl: return; goto CPMXj; RXahY: } public static function refresh() { Artisan::call("\x61\x64\x6d\x69\x6e\72\147\x65\x6e\x2d\x72\157\x75\x74\145"); } }
