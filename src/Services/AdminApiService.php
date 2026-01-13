<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$Nc3_h, $H7VEt = '') { goto Zzzka; wWkVn: admin_abort_if($Rmkaf || in_array(ltrim($Nc3_h["\x70\141\164\x68"], "\57"), $Yqps2), admin_trans("\x61\x64\x6d\151\156\56\x61\160\x69\163\x2e\x70\141\x74\150\137\x65\170\151\x73\164\163")); goto i71RW; Zzzka: $Rmkaf = $this->query()->where("\160\x61\164\150", $Nc3_h["\160\x61\164\x68"])->when($H7VEt, fn($E9Z9Z) => $E9Z9Z->where("\151\144", "\x3c\x3e", $H7VEt))->exists(); goto r4zFo; r4zFo: $Yqps2 = AdminCodeGenerator::query()->get()->map(function ($zqq1t) { return $zqq1t->menu_info["\145\156\x61\142\154\145\x64"] ? ltrim($zqq1t->menu_info["\x72\157\x75\164\x65"], "\57") : ''; })->filter()->toArray(); goto wWkVn; i71RW: } public function saved($Va95y, $z900F = false) { RouteGenerator::refresh(); } public function deleted($XG9Hk) { RouteGenerator::refresh(); } public function getApiByPath($e01IC) { goto q3knN; vJSmM: return $jo_BC; goto sg6_G; q3knN: $jo_BC = $this->query()->where("\x70\x61\x74\150", $e01IC)->first(); goto dCy8Z; dCy8Z: if (!(!$jo_BC && str_starts_with($e01IC, "\57"))) { goto XPHaa; } goto pU6T1; sFCdm: XPHaa: goto vJSmM; pU6T1: $jo_BC = $this->query()->where("\160\141\x74\x68", ltrim($e01IC, "\x2f"))->first(); goto sFCdm; sg6_G: } public function getApiByTemplate($UdSPk) { return $this->query()->where("\x74\x65\x6d\x70\154\x61\164\x65", $UdSPk)->first(); } }
