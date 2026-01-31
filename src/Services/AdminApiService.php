<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:06              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$n1i_W, $yRun3 = '') { goto nPKmT; CdA0g: admin_abort_if($bQYN0 || in_array(ltrim($n1i_W["\160\x61\x74\150"], "\x2f"), $nZZku), admin_trans("\x61\144\x6d\x69\156\56\x61\x70\151\x73\x2e\x70\x61\164\150\137\x65\x78\151\x73\x74\163")); goto HnbgS; nPKmT: $bQYN0 = $this->query()->where("\x70\141\164\x68", $n1i_W["\x70\x61\164\x68"])->when($yRun3, fn($sDw__) => $sDw__->where("\x69\x64", "\74\76", $yRun3))->exists(); goto dCZT4; dCZT4: $nZZku = AdminCodeGenerator::query()->get()->map(function ($WDlTF) { return $WDlTF->menu_info["\x65\156\x61\x62\154\145\x64"] ? ltrim($WDlTF->menu_info["\162\157\x75\x74\145"], "\57") : ''; })->filter()->toArray(); goto CdA0g; HnbgS: } public function saved($hzw58, $el_7J = false) { RouteGenerator::refresh(); } public function deleted($Saqrl) { RouteGenerator::refresh(); } public function getApiByPath($prUsj) { goto ZEhL0; lXt5l: w6y69: goto IsK1g; copNr: $BfHls = $this->query()->where("\x70\x61\164\150", ltrim($prUsj, "\57"))->first(); goto lXt5l; AK_Ar: if (!(!$BfHls && str_starts_with($prUsj, "\x2f"))) { goto w6y69; } goto copNr; IsK1g: return $BfHls; goto rj6db; ZEhL0: $BfHls = $this->query()->where("\x70\x61\x74\150", $prUsj)->first(); goto AK_Ar; rj6db: } public function getApiByTemplate($ahPUu) { return $this->query()->where("\164\x65\x6d\x70\x6c\141\x74\145", $ahPUu)->first(); } }
