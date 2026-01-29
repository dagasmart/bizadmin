<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:24              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$MvDNw, $n3jM3 = '') { goto M9Hb1; lEwGL: $tn_a1 = AdminCodeGenerator::query()->get()->map(function ($HeXce) { return $HeXce->menu_info["\145\x6e\x61\x62\154\x65\144"] ? ltrim($HeXce->menu_info["\162\x6f\165\x74\x65"], "\57") : ''; })->filter()->toArray(); goto lVclV; lVclV: admin_abort_if($Db_kX || in_array(ltrim($MvDNw["\160\x61\x74\x68"], "\57"), $tn_a1), admin_trans("\x61\144\155\151\156\x2e\x61\160\x69\x73\x2e\x70\141\x74\x68\137\145\170\x69\x73\164\x73")); goto ifj0u; M9Hb1: $Db_kX = $this->query()->where("\160\x61\164\x68", $MvDNw["\160\141\164\x68"])->when($n3jM3, fn($QgeGR) => $QgeGR->where("\x69\144", "\x3c\x3e", $n3jM3))->exists(); goto lEwGL; ifj0u: } public function saved($ym6xK, $x3g5a = false) { RouteGenerator::refresh(); } public function deleted($hhpDy) { RouteGenerator::refresh(); } public function getApiByPath($wSKpS) { goto RVNe7; SjH_P: return $s4PKi; goto IHbSx; edS0C: $s4PKi = $this->query()->where("\x70\141\x74\150", ltrim($wSKpS, "\x2f"))->first(); goto yWUhs; yWUhs: OvKen: goto SjH_P; RVNe7: $s4PKi = $this->query()->where("\160\141\164\x68", $wSKpS)->first(); goto z1o1i; z1o1i: if (!(!$s4PKi && str_starts_with($wSKpS, "\57"))) { goto OvKen; } goto edS0C; IHbSx: } public function getApiByTemplate($mmXsR) { return $this->query()->where("\x74\x65\x6d\160\x6c\x61\x74\145", $mmXsR)->first(); } }
