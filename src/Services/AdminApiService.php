<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$a8P6L, $QlWse = '') { goto lbrvG; lbrvG: $d7FzG = $this->query()->where("\x70\x61\x74\150", $a8P6L["\x70\141\x74\x68"])->when($QlWse, fn($x94op) => $x94op->where("\151\144", "\x3c\76", $QlWse))->exists(); goto Tyott; Tyott: $Dvstx = AdminCodeGenerator::query()->get()->map(function ($Fqk1F) { return $Fqk1F->menu_info["\x65\156\141\142\x6c\145\144"] ? ltrim($Fqk1F->menu_info["\x72\157\x75\164\x65"], "\57") : ''; })->filter()->toArray(); goto b51NO; b51NO: admin_abort_if($d7FzG || in_array(ltrim($a8P6L["\x70\x61\164\x68"], "\57"), $Dvstx), admin_trans("\x61\144\x6d\151\156\56\x61\x70\151\x73\x2e\x70\x61\164\x68\x5f\145\x78\151\163\x74\x73")); goto o5cl_; o5cl_: } public function saved($x3RgA, $HKZIo = false) { RouteGenerator::refresh(); } public function deleted($gJjxx) { RouteGenerator::refresh(); } public function getApiByPath($geQcW) { goto BM4m8; BM4m8: $oJD2d = $this->query()->where("\160\x61\x74\x68", $geQcW)->first(); goto Rv6zD; Rv6zD: if (!(!$oJD2d && str_starts_with($geQcW, "\x2f"))) { goto ZjTiR; } goto BX4Mj; dOtHO: ZjTiR: goto QxOmQ; QxOmQ: return $oJD2d; goto yuM6J; BX4Mj: $oJD2d = $this->query()->where("\x70\141\x74\150", ltrim($geQcW, "\x2f"))->first(); goto dOtHO; yuM6J: } public function getApiByTemplate($k2Dfi) { return $this->query()->where("\164\145\155\160\x6c\141\x74\145", $k2Dfi)->first(); } }
