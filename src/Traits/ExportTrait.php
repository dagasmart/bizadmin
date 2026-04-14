<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto e8J6C; hQlfz: $wSKpS = sprintf("\45\x73\55\45\163\56\x78\154\x73\x78", $this->exportFileName(), date("\131\x6d\144\110\151\163")); goto qCvi9; Hauc0: request()->replace(array_map(fn($eVLXV) => is_json($eVLXV) ? json_decode($eVLXV, true) : $eVLXV, request()->all())); goto hQlfz; HMmVz: try { fastexcel($F5wSH->get())->export(storage_path("\x61\160\x70\57" . $wSKpS), fn($z9GtO) => $this->exportMap($z9GtO)); } catch (\Throwable $gisIz) { report($gisIz); admin_abort(admin_trans("\141\144\x6d\151\156\56\141\143\x74\151\x6f\156\x5f\x66\x61\x69\154\x65\x64")); } goto lpelN; qCvi9: $hhpDy = request()->input("\x5f\x69\x64\163"); goto BYwxJ; e8J6C: admin_abort_if(!class_exists("\x5c\x52\141\160\62\x68\160\157\165\164\x72\x65\x5c\106\141\163\164\x45\x78\143\145\x6c\x5c\106\x61\x73\x74\x45\x78\143\x65\x6c"), admin_trans("\x61\x64\155\151\x6e\56\x65\170\160\157\x72\x74\x2e\160\154\145\141\x73\x65\x5f\x69\x6e\163\x74\141\154\154\137\154\x61\162\141\x76\x65\x6c\x5f\x65\x78\143\x65\x6c")); goto Hauc0; lpelN: return $this->response()->success(compact("\x70\x61\164\x68")); goto yZZLm; BYwxJ: $F5wSH = $this->service->listQuery()->when($hhpDy, function ($F5wSH) use($hhpDy) { return $F5wSH->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\x2c", $hhpDy)); }); goto HMmVz; yZZLm: } protected function exportMap($z9GtO) { return $z9GtO; } protected function exportFileName() { return strtolower(str_replace("\x43\157\x6e\x74\x72\x6f\x6c\154\145\162", '', class_basename($this))); } }
