<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$EBZpG, $aTqaC = '') { goto MtNJI; MtNJI: $WQo2V = $this->query()->where("\160\x61\x74\x68", $EBZpG["\x70\141\x74\x68"])->when($aTqaC, fn($KdgcE) => $KdgcE->where("\x69\x64", "\74\x3e", $aTqaC))->exists(); goto YAxJ5; weuJF: admin_abort_if($WQo2V || in_array(ltrim($EBZpG["\160\141\x74\150"], "\x2f"), $UNpzy), admin_trans("\141\x64\155\x69\x6e\x2e\141\160\x69\x73\56\x70\141\164\150\137\x65\x78\x69\x73\x74\x73")); goto Ea_ra; YAxJ5: $UNpzy = AdminCodeGenerator::query()->get()->map(function ($CWHye) { return $CWHye->menu_info["\145\156\x61\x62\154\x65\x64"] ? ltrim($CWHye->menu_info["\x72\157\x75\164\x65"], "\57") : ''; })->filter()->toArray(); goto weuJF; Ea_ra: } public function saved($vjMgS, $c8wOP = false) { RouteGenerator::refresh(); } public function deleted($m_83k) { RouteGenerator::refresh(); } public function getApiByPath($vDWeX) { goto ensD9; msxBw: return $yh7Gc; goto VhrEZ; LEnI9: $yh7Gc = $this->query()->where("\x70\x61\164\x68", ltrim($vDWeX, "\x2f"))->first(); goto us2qt; Z9w34: if (!(!$yh7Gc && str_starts_with($vDWeX, "\57"))) { goto Q2Bjj; } goto LEnI9; ensD9: $yh7Gc = $this->query()->where("\160\141\x74\x68", $vDWeX)->first(); goto Z9w34; us2qt: Q2Bjj: goto msxBw; VhrEZ: } public function getApiByTemplate($ZihuJ) { return $this->query()->where("\164\145\x6d\160\154\141\164\145", $ZihuJ)->first(); } }
