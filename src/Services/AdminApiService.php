<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$sLb0B, $YvVcq = '') { goto rVF3R; g3lk3: admin_abort_if($e2UaT || in_array(ltrim($sLb0B["\160\x61\x74\150"], "\57"), $XMU4W), admin_trans("\141\x64\x6d\x69\156\56\141\x70\x69\x73\x2e\160\x61\164\150\x5f\x65\x78\x69\x73\x74\163")); goto ifXMh; rVF3R: $e2UaT = $this->query()->where("\160\x61\x74\150", $sLb0B["\160\x61\164\150"])->when($YvVcq, fn($zeBBR) => $zeBBR->where("\x69\x64", "\x3c\x3e", $YvVcq))->exists(); goto CPcVR; CPcVR: $XMU4W = AdminCodeGenerator::query()->get()->map(function ($mJQce) { return $mJQce->menu_info["\145\x6e\x61\x62\154\x65\144"] ? ltrim($mJQce->menu_info["\162\157\165\x74\145"], "\x2f") : ''; })->filter()->toArray(); goto g3lk3; ifXMh: } public function saved($yCt77, $Vj4U3 = false) { RouteGenerator::refresh(); } public function deleted($zaIwv) { RouteGenerator::refresh(); } public function getApiByPath($X7GL0) { goto OvArr; lfN_Q: bzlLa: goto fpE1x; OvArr: $s7hFN = $this->query()->where("\160\x61\164\150", $X7GL0)->first(); goto uTjfS; Zol4t: $s7hFN = $this->query()->where("\160\x61\164\150", ltrim($X7GL0, "\57"))->first(); goto lfN_Q; uTjfS: if (!(!$s7hFN && str_starts_with($X7GL0, "\x2f"))) { goto bzlLa; } goto Zol4t; fpE1x: return $s7hFN; goto w2bxd; w2bxd: } public function getApiByTemplate($LiS3c) { return $this->query()->where("\x74\145\x6d\160\x6c\x61\164\145", $LiS3c)->first(); } }
