<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$MvDNw, $n3jM3 = '') { goto kFjEL; kFjEL: $Db_kX = $this->query()->where("\x70\x61\x74\150", $MvDNw["\160\141\x74\150"])->when($n3jM3, fn($QgeGR) => $QgeGR->where("\x69\x64", "\74\x3e", $n3jM3))->exists(); goto q9ErG; e04wP: admin_abort_if($Db_kX || in_array(ltrim($MvDNw["\160\141\164\150"], "\57"), $tn_a1), admin_trans("\x61\144\155\x69\156\x2e\x61\x70\x69\163\x2e\x70\141\164\x68\137\x65\170\151\x73\164\x73")); goto rAI9W; q9ErG: $tn_a1 = AdminCodeGenerator::query()->get()->map(function ($HeXce) { return $HeXce->menu_info["\145\156\141\x62\154\x65\x64"] ? ltrim($HeXce->menu_info["\162\157\x75\164\x65"], "\x2f") : ''; })->filter()->toArray(); goto e04wP; rAI9W: } public function saved($ym6xK, $x3g5a = false) { RouteGenerator::refresh(); } public function deleted($hhpDy) { RouteGenerator::refresh(); } public function getApiByPath($wSKpS) { goto pNFyc; pNFyc: $s4PKi = $this->query()->where("\160\x61\x74\150", $wSKpS)->first(); goto mBboX; hKrFv: return $s4PKi; goto GLDVF; VaeAg: MW3X8: goto hKrFv; bhwD9: $s4PKi = $this->query()->where("\160\141\164\x68", ltrim($wSKpS, "\57"))->first(); goto VaeAg; mBboX: if (!(!$s4PKi && str_starts_with($wSKpS, "\57"))) { goto MW3X8; } goto bhwD9; GLDVF: } public function getApiByTemplate($mmXsR) { return $this->query()->where("\164\x65\155\x70\x6c\x61\164\x65", $mmXsR)->first(); } }
