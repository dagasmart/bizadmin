<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$iYkCE, $H0UO0 = '') { goto GWmsm; GWmsm: $F8uS9 = $this->query()->where("\x70\141\x74\150", $iYkCE["\160\x61\x74\x68"])->when($H0UO0, fn($i42Xs) => $i42Xs->where("\x69\x64", "\74\76", $H0UO0))->exists(); goto R5Ont; CaZ4M: admin_abort_if($F8uS9 || in_array(ltrim($iYkCE["\160\x61\164\x68"], "\x2f"), $XhTyT), admin_trans("\x61\144\x6d\151\x6e\56\141\160\x69\x73\56\160\x61\x74\150\137\145\170\x69\x73\164\163")); goto nOkw3; R5Ont: $XhTyT = AdminCodeGenerator::query()->get()->map(function ($d5VYO) { return $d5VYO->menu_info["\x65\156\x61\142\154\145\x64"] ? ltrim($d5VYO->menu_info["\162\157\x75\x74\145"], "\x2f") : ''; })->filter()->toArray(); goto CaZ4M; nOkw3: } public function saved($XO8t_, $JONds = false) { RouteGenerator::refresh(); } public function deleted($FaUsO) { RouteGenerator::refresh(); } public function getApiByPath($Sv1lc) { goto O1qYz; Ymf8Q: $FonLQ = $this->query()->where("\x70\141\x74\x68", ltrim($Sv1lc, "\x2f"))->first(); goto zgFNa; O1qYz: $FonLQ = $this->query()->where("\x70\x61\164\150", $Sv1lc)->first(); goto NuwIk; zgFNa: ni5g5: goto wGfH6; NuwIk: if (!(!$FonLQ && str_starts_with($Sv1lc, "\57"))) { goto ni5g5; } goto Ymf8Q; wGfH6: return $FonLQ; goto HcPbH; HcPbH: } public function getApiByTemplate($vOxap) { return $this->query()->where("\164\x65\x6d\x70\154\141\164\145", $vOxap)->first(); } }
