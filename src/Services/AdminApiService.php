<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:16              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$MvDNw, $n3jM3 = '') { goto jXRGv; nf9wK: admin_abort_if($Db_kX || in_array(ltrim($MvDNw["\160\141\x74\150"], "\x2f"), $tn_a1), admin_trans("\x61\144\155\x69\x6e\56\141\x70\x69\x73\56\160\141\164\150\137\145\170\151\163\x74\x73")); goto oUmt2; cVn0K: $tn_a1 = AdminCodeGenerator::query()->get()->map(function ($HeXce) { return $HeXce->menu_info["\x65\x6e\x61\x62\154\145\144"] ? ltrim($HeXce->menu_info["\162\157\165\164\145"], "\x2f") : ''; })->filter()->toArray(); goto nf9wK; jXRGv: $Db_kX = $this->query()->where("\160\141\x74\150", $MvDNw["\x70\x61\x74\x68"])->when($n3jM3, fn($QgeGR) => $QgeGR->where("\151\x64", "\74\76", $n3jM3))->exists(); goto cVn0K; oUmt2: } public function saved($ym6xK, $x3g5a = false) { RouteGenerator::refresh(); } public function deleted($hhpDy) { RouteGenerator::refresh(); } public function getApiByPath($wSKpS) { goto DlhAP; tj9So: return $s4PKi; goto L6iWX; MDd3B: W0dGp: goto tj9So; DlhAP: $s4PKi = $this->query()->where("\160\x61\164\150", $wSKpS)->first(); goto uiEIp; ZXVaA: $s4PKi = $this->query()->where("\160\x61\164\150", ltrim($wSKpS, "\57"))->first(); goto MDd3B; uiEIp: if (!(!$s4PKi && str_starts_with($wSKpS, "\57"))) { goto W0dGp; } goto ZXVaA; L6iWX: } public function getApiByTemplate($mmXsR) { return $this->query()->where("\164\145\155\160\154\x61\x74\145", $mmXsR)->first(); } }
