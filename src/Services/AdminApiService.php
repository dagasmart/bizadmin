<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$tek9W, $ZXxj3 = '') { goto aaHiT; rc519: $iBhmL = AdminCodeGenerator::query()->get()->map(function ($KehAk) { return $KehAk->menu_info["\145\x6e\x61\142\x6c\145\144"] ? ltrim($KehAk->menu_info["\162\157\165\164\145"], "\57") : ''; })->filter()->toArray(); goto B2amZ; B2amZ: admin_abort_if($Kt4H4 || in_array(ltrim($tek9W["\x70\x61\x74\150"], "\x2f"), $iBhmL), admin_trans("\x61\144\155\x69\x6e\56\141\160\x69\x73\56\160\141\164\150\x5f\x65\x78\x69\163\x74\x73")); goto oR2kT; aaHiT: $Kt4H4 = $this->query()->where("\160\141\x74\x68", $tek9W["\x70\141\164\150"])->when($ZXxj3, fn($C4ND0) => $C4ND0->where("\151\144", "\74\x3e", $ZXxj3))->exists(); goto rc519; oR2kT: } public function saved($QKZuf, $Ykmjz = false) { RouteGenerator::refresh(); } public function deleted($ZY4rR) { RouteGenerator::refresh(); } public function getApiByPath($RlmSt) { goto LCL7g; LCL7g: $zwBgV = $this->query()->where("\160\141\x74\x68", $RlmSt)->first(); goto DR1VX; fu5fP: $zwBgV = $this->query()->where("\160\x61\164\150", ltrim($RlmSt, "\57"))->first(); goto VBwdg; VBwdg: aP3Zg: goto hHlOH; hHlOH: return $zwBgV; goto stKIR; DR1VX: if (!(!$zwBgV && str_starts_with($RlmSt, "\x2f"))) { goto aP3Zg; } goto fu5fP; stKIR: } public function getApiByTemplate($JJbCK) { return $this->query()->where("\164\145\155\160\x6c\x61\x74\145", $JJbCK)->first(); } }
