<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:19              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto DEN0p; D0ThI: request()->replace(array_map(fn($eVLXV) => is_json($eVLXV) ? json_decode($eVLXV, true) : $eVLXV, request()->all())); goto wOLmh; GAxEI: $F5wSH = $this->service->listQuery()->when($hhpDy, function ($F5wSH) use($hhpDy) { return $F5wSH->whereIn($this->service->getModel()->getTable() . "\x2e" . $this->service->primaryKey(), explode("\54", $hhpDy)); }); goto rU2My; DEN0p: admin_abort_if(!class_exists("\134\122\x61\x70\x32\x68\x70\157\165\x74\x72\x65\x5c\x46\141\163\164\105\x78\x63\145\154\x5c\x46\x61\x73\x74\105\170\x63\x65\154"), admin_trans("\x61\144\x6d\x69\x6e\56\x65\x78\x70\157\x72\x74\56\160\x6c\145\x61\x73\145\x5f\151\156\x73\164\141\x6c\154\137\154\141\x72\x61\166\x65\154\x5f\145\170\x63\145\x6c")); goto D0ThI; rU2My: try { fastexcel($F5wSH->get())->export(storage_path("\141\x70\160\57" . $wSKpS), fn($z9GtO) => $this->exportMap($z9GtO)); } catch (\Throwable $gisIz) { report($gisIz); admin_abort(admin_trans("\141\x64\155\x69\x6e\56\x61\x63\x74\x69\x6f\156\x5f\x66\141\151\154\145\x64")); } goto D0dOa; XyNWM: $hhpDy = request()->input("\x5f\x69\x64\163"); goto GAxEI; D0dOa: return $this->response()->success(compact("\x70\141\x74\150")); goto w25gQ; wOLmh: $wSKpS = sprintf("\45\163\55\x25\x73\x2e\170\x6c\x73\170", $this->exportFileName(), date("\131\155\x64\x48\x69\x73")); goto XyNWM; w25gQ: } protected function exportMap($z9GtO) { return $z9GtO; } protected function exportFileName() { return strtolower(str_replace("\x43\x6f\x6e\x74\x72\x6f\154\x6c\145\x72", '', class_basename($this))); } }
