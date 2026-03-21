<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use DagaSmart\BizAdmin\Models\AdminApi; use Illuminate\Database\Eloquent\Builder; use DagaSmart\BizAdmin\Models\AdminCodeGenerator; use DagaSmart\BizAdmin\Support\CodeGenerator\RouteGenerator; class AdminApiService extends AdminService { protected string $modelName = AdminApi::class; public function saving(&$Uv4qm, $TVDEa = '') { goto njSVG; njSVG: $TmyyJ = $this->query()->where("\160\x61\x74\x68", $Uv4qm["\x70\141\164\150"])->when($TVDEa, fn($KCaDl) => $KCaDl->where("\x69\144", "\x3c\x3e", $TVDEa))->exists(); goto Btqa7; Btqa7: $YOixR = AdminCodeGenerator::query()->get()->map(function ($yjBVb) { return $yjBVb->menu_info["\x65\x6e\141\142\x6c\x65\x64"] ? ltrim($yjBVb->menu_info["\x72\x6f\x75\164\x65"], "\57") : ''; })->filter()->toArray(); goto utHOj; utHOj: admin_abort_if($TmyyJ || in_array(ltrim($Uv4qm["\x70\141\x74\x68"], "\x2f"), $YOixR), admin_trans("\x61\x64\155\x69\x6e\56\141\160\x69\x73\56\160\141\164\x68\137\145\x78\x69\163\164\163")); goto e6h9V; e6h9V: } public function saved($LGos4, $gxrvb = false) { RouteGenerator::refresh(); } public function deleted($rBPHG) { RouteGenerator::refresh(); } public function getApiByPath($ICl39) { goto jFqLQ; oISiY: $yXxid = $this->query()->where("\160\141\164\x68", ltrim($ICl39, "\x2f"))->first(); goto go61d; uaFOG: if (!(!$yXxid && str_starts_with($ICl39, "\x2f"))) { goto j38q4; } goto oISiY; jFqLQ: $yXxid = $this->query()->where("\160\x61\164\150", $ICl39)->first(); goto uaFOG; go61d: j38q4: goto UNReJ; UNReJ: return $yXxid; goto mZOin; mZOin: } public function getApiByTemplate($D0BGp) { return $this->query()->where("\164\x65\x6d\x70\x6c\x61\164\145", $D0BGp)->first(); } }
