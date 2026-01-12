<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:00              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$G8KP3, $K2RyF = '') { goto iPw6g; aEpPV: $aRcX3 = AdminCodeGenerator::query()->get()->map(function ($u0LUM) { return $u0LUM->menu_info["\x65\156\x61\x62\154\145\x64"] ? ltrim($u0LUM->menu_info["\x72\157\x75\164\x65"], "\57") : ''; })->filter()->toArray(); goto bGrjw; iPw6g: $xqyk3 = $this->query()->where("\160\x61\x74\150", $G8KP3["\x70\x61\x74\150"])->when($K2RyF, fn($pxd2Y) => $pxd2Y->where("\151\144", "\74\76", $K2RyF))->exists(); goto aEpPV; bGrjw: admin_abort_if($xqyk3 || in_array(ltrim($G8KP3["\160\141\164\150"], "\x2f"), $aRcX3), admin_trans("\141\144\x6d\151\x6e\56\x61\160\x69\x73\x2e\x70\x61\x74\x68\137\x65\170\151\163\164\163")); goto kQdPL; kQdPL: } public function saved($TyTCs, $PjLck = false) { RouteGenerator::refresh(); } public function deleted($bYKkZ) { RouteGenerator::refresh(); } public function getApiByPath($doLfm) { goto H9pWT; H9pWT: $dUR9E = $this->query()->where("\160\141\x74\150", $doLfm)->first(); goto k1cOM; TP8EC: $dUR9E = $this->query()->where("\160\141\x74\x68", ltrim($doLfm, "\57"))->first(); goto Lj2F_; rSSo2: return $dUR9E; goto LdtJM; Lj2F_: wQrs_: goto rSSo2; k1cOM: if (!(!$dUR9E && str_starts_with($doLfm, "\57"))) { goto wQrs_; } goto TP8EC; LdtJM: } public function getApiByTemplate($umJ8X) { return $this->query()->where("\x74\x65\155\160\x6c\141\x74\x65", $umJ8X)->first(); } }
