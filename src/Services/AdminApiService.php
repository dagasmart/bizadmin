<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:22              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$OFJRl, $FRNkI = '') { goto b2jOG; b2jOG: $asxHF = $this->query()->where("\x70\141\x74\150", $OFJRl["\x70\x61\x74\150"])->when($FRNkI, fn($lG7Ic) => $lG7Ic->where("\151\144", "\74\x3e", $FRNkI))->exists(); goto Ah0af; Ah0af: $xNb0o = AdminCodeGenerator::query()->get()->map(function ($pTLbM) { return $pTLbM->menu_info["\x65\156\141\x62\x6c\145\x64"] ? ltrim($pTLbM->menu_info["\162\x6f\165\x74\x65"], "\x2f") : ''; })->filter()->toArray(); goto gp3EC; gp3EC: admin_abort_if($asxHF || in_array(ltrim($OFJRl["\160\x61\164\x68"], "\x2f"), $xNb0o), admin_trans("\x61\144\x6d\151\156\56\x61\160\x69\163\56\x70\141\x74\x68\137\145\170\x69\x73\164\163")); goto ztezN; ztezN: } public function saved($oh_kY, $fmCtx = false) { RouteGenerator::refresh(); } public function deleted($wstFL) { RouteGenerator::refresh(); } public function getApiByPath($zlKvU) { goto mFvmM; JN_2T: if (!(!$bn17g && str_starts_with($zlKvU, "\57"))) { goto t4a1U; } goto RvBFK; ZIM2j: t4a1U: goto dMByO; RvBFK: $bn17g = $this->query()->where("\160\141\x74\x68", ltrim($zlKvU, "\x2f"))->first(); goto ZIM2j; dMByO: return $bn17g; goto T2rbf; mFvmM: $bn17g = $this->query()->where("\160\x61\164\150", $zlKvU)->first(); goto JN_2T; T2rbf: } public function getApiByTemplate($KwJuB) { return $this->query()->where("\164\145\x6d\x70\154\x61\x74\145", $KwJuB)->first(); } }
