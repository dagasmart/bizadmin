<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$Scqzw, $Xy32J = '') { goto uHwQW; zu2V5: $ZWddP = AdminCodeGenerator::query()->get()->map(function ($bCXDi) { return $bCXDi->menu_info["\x65\x6e\141\x62\154\145\144"] ? ltrim($bCXDi->menu_info["\x72\x6f\x75\x74\145"], "\x2f") : ''; })->filter()->toArray(); goto FbLCs; uHwQW: $tcrfx = $this->query()->where("\x70\x61\164\x68", $Scqzw["\x70\141\164\x68"])->when($Xy32J, fn($ogxKU) => $ogxKU->where("\151\144", "\74\x3e", $Xy32J))->exists(); goto zu2V5; FbLCs: admin_abort_if($tcrfx || in_array(ltrim($Scqzw["\x70\141\x74\150"], "\57"), $ZWddP), admin_trans("\x61\x64\x6d\x69\x6e\x2e\141\x70\x69\x73\56\x70\x61\164\150\x5f\x65\170\x69\163\x74\x73")); goto WXCUV; WXCUV: } public function saved($ru9lv, $xVeuE = false) { RouteGenerator::refresh(); } public function deleted($iUH_6) { RouteGenerator::refresh(); } public function getApiByPath($nk9G6) { goto BRpt_; D5fOk: Ohone: goto dxAnu; ucZn2: if (!(!$Ki_F1 && str_starts_with($nk9G6, "\57"))) { goto Ohone; } goto Ib4CW; dxAnu: return $Ki_F1; goto WKiJX; BRpt_: $Ki_F1 = $this->query()->where("\x70\x61\x74\x68", $nk9G6)->first(); goto ucZn2; Ib4CW: $Ki_F1 = $this->query()->where("\x70\141\164\x68", ltrim($nk9G6, "\57"))->first(); goto D5fOk; WKiJX: } public function getApiByTemplate($TvBl4) { return $this->query()->where("\164\145\155\x70\x6c\141\164\x65", $TvBl4)->first(); } }
