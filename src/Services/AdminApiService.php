<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:52              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$ABUMy, $GA4SA = '') { goto Yl0Fy; dSdCE: $yd_y7 = AdminCodeGenerator::query()->get()->map(function ($O1aHI) { return $O1aHI->menu_info["\145\x6e\x61\142\154\x65\144"] ? ltrim($O1aHI->menu_info["\162\157\x75\x74\145"], "\57") : ''; })->filter()->toArray(); goto mnUrT; Yl0Fy: $FP2zz = $this->query()->where("\160\x61\164\150", $ABUMy["\160\141\x74\x68"])->when($GA4SA, fn($L7BYc) => $L7BYc->where("\x69\x64", "\x3c\x3e", $GA4SA))->exists(); goto dSdCE; mnUrT: admin_abort_if($FP2zz || in_array(ltrim($ABUMy["\x70\x61\x74\x68"], "\57"), $yd_y7), admin_trans("\141\144\x6d\x69\156\56\141\160\x69\163\56\160\141\x74\x68\137\145\170\151\x73\x74\163")); goto mo7Em; mo7Em: } public function saved($pV6eF, $W6t4q = false) { RouteGenerator::refresh(); } public function deleted($oEuZd) { RouteGenerator::refresh(); } public function getApiByPath($XVxRx) { goto QbkT0; hO4o4: return $mAcmM; goto wukGv; QbkT0: $mAcmM = $this->query()->where("\x70\141\x74\150", $XVxRx)->first(); goto ZiWua; ZiWua: if (!(!$mAcmM && str_starts_with($XVxRx, "\x2f"))) { goto ecm4S; } goto thwF2; thwF2: $mAcmM = $this->query()->where("\x70\141\164\x68", ltrim($XVxRx, "\x2f"))->first(); goto JeSYA; JeSYA: ecm4S: goto hO4o4; wukGv: } public function getApiByTemplate($h1g7s) { return $this->query()->where("\x74\x65\x6d\160\154\x61\x74\x65", $h1g7s)->first(); } }
