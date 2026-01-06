<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto uYD16; CZQY2: $Lx3p8 = request()->input("\137\x69\x64\163"); goto SGS0o; AQQIX: try { fastexcel($XP19u->get())->export(storage_path("\141\x70\x70\x2f" . $KFu_V), fn($RMOJB) => $this->exportMap($RMOJB)); } catch (\Throwable $nVtgT) { report($nVtgT); admin_abort(admin_trans("\x61\144\155\151\156\56\x61\143\x74\x69\x6f\x6e\x5f\x66\141\151\x6c\145\144")); } goto iHwOE; uYD16: admin_abort_if(!class_exists("\134\x52\141\x70\x32\150\x70\x6f\165\164\162\145\x5c\106\x61\x73\x74\x45\170\143\x65\154\134\x46\141\163\164\105\170\x63\145\154"), admin_trans("\x61\144\155\151\x6e\x2e\x65\170\x70\157\162\164\x2e\160\x6c\145\x61\x73\145\x5f\x69\156\163\x74\x61\x6c\x6c\137\x6c\141\x72\x61\x76\145\154\137\145\x78\x63\145\154")); goto lq3p3; iHwOE: return $this->response()->success(compact("\x70\141\x74\150")); goto fjA7W; lvb4b: $KFu_V = sprintf("\45\x73\55\45\163\56\170\154\163\x78", $this->exportFileName(), date("\131\x6d\x64\x48\x69\x73")); goto CZQY2; SGS0o: $XP19u = $this->service->listQuery()->when($Lx3p8, function ($XP19u) use($Lx3p8) { return $XP19u->whereIn($this->service->getModel()->getTable() . "\x2e" . $this->service->primaryKey(), explode("\x2c", $Lx3p8)); }); goto AQQIX; lq3p3: request()->replace(array_map(fn($QbN7z) => is_json($QbN7z) ? json_decode($QbN7z, true) : $QbN7z, request()->all())); goto lvb4b; fjA7W: } protected function exportMap($RMOJB) { return $RMOJB; } protected function exportFileName() { return strtolower(str_replace("\x43\x6f\x6e\164\x72\157\154\154\145\x72", '', class_basename($this))); } }
