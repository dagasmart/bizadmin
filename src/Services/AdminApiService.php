<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$yLUxg, $Cv6BU = '') { goto gYnf4; gYnf4: $l733V = $this->query()->where("\160\x61\x74\150", $yLUxg["\x70\141\x74\x68"])->when($Cv6BU, fn($oRgbX) => $oRgbX->where("\151\x64", "\x3c\76", $Cv6BU))->exists(); goto Kxbq9; Kxbq9: $JA55Y = AdminCodeGenerator::query()->get()->map(function ($oClGr) { return $oClGr->menu_info["\145\x6e\x61\142\x6c\145\144"] ? ltrim($oClGr->menu_info["\162\157\165\x74\x65"], "\57") : ''; })->filter()->toArray(); goto rx988; rx988: admin_abort_if($l733V || in_array(ltrim($yLUxg["\x70\141\x74\150"], "\57"), $JA55Y), admin_trans("\x61\x64\x6d\151\156\56\141\x70\x69\163\56\x70\x61\x74\x68\x5f\x65\170\151\x73\164\163")); goto pbCDb; pbCDb: } public function saved($pTnyC, $d7o4g = false) { RouteGenerator::refresh(); } public function deleted($ZmjKx) { RouteGenerator::refresh(); } public function getApiByPath($zz5OM) { goto S55hZ; S55hZ: $Wt8ua = $this->query()->where("\160\141\x74\x68", $zz5OM)->first(); goto RvFbd; QB8sv: Yw3UF: goto gdaTQ; TrQcz: $Wt8ua = $this->query()->where("\160\141\164\150", ltrim($zz5OM, "\x2f"))->first(); goto QB8sv; RvFbd: if (!(!$Wt8ua && str_starts_with($zz5OM, "\57"))) { goto Yw3UF; } goto TrQcz; gdaTQ: return $Wt8ua; goto MgGKR; MgGKR: } public function getApiByTemplate($POUZs) { return $this->query()->where("\164\145\x6d\160\x6c\141\164\x65", $POUZs)->first(); } }
