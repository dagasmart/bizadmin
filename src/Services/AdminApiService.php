<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:43              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$PN11n, $zAeL9 = '') { goto F3E70; PApxO: admin_abort_if($Rmu4X || in_array(ltrim($PN11n["\160\x61\x74\x68"], "\57"), $UwTKV), admin_trans("\x61\144\155\x69\x6e\56\x61\160\x69\x73\x2e\x70\x61\164\150\137\145\170\x69\163\x74\x73")); goto m4V7G; F3E70: $Rmu4X = $this->query()->where("\160\141\x74\150", $PN11n["\160\x61\164\150"])->when($zAeL9, fn($fvbLK) => $fvbLK->where("\151\144", "\74\x3e", $zAeL9))->exists(); goto HsxGZ; HsxGZ: $UwTKV = AdminCodeGenerator::query()->get()->map(function ($BHxS1) { return $BHxS1->menu_info["\145\156\141\x62\x6c\x65\x64"] ? ltrim($BHxS1->menu_info["\162\157\165\x74\x65"], "\57") : ''; })->filter()->toArray(); goto PApxO; m4V7G: } public function saved($vzUfg, $GPmYV = false) { RouteGenerator::refresh(); } public function deleted($cWram) { RouteGenerator::refresh(); } public function getApiByPath($ALS2w) { goto YQUq2; J6nTz: $e718Y = $this->query()->where("\x70\141\x74\x68", ltrim($ALS2w, "\x2f"))->first(); goto h7Kk3; teUoN: return $e718Y; goto QRoEA; YQUq2: $e718Y = $this->query()->where("\160\x61\x74\x68", $ALS2w)->first(); goto fwVo9; fwVo9: if (!(!$e718Y && str_starts_with($ALS2w, "\57"))) { goto HMg1Y; } goto J6nTz; h7Kk3: HMg1Y: goto teUoN; QRoEA: } public function getApiByTemplate($Mder_) { return $this->query()->where("\x74\145\155\x70\x6c\141\x74\x65", $Mder_)->first(); } }
