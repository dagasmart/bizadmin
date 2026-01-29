<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:25              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto sxtjz; gWYIf: $F5wSH = $this->service->listQuery()->when($hhpDy, function ($F5wSH) use($hhpDy) { return $F5wSH->whereIn($this->service->getModel()->getTable() . "\x2e" . $this->service->primaryKey(), explode("\54", $hhpDy)); }); goto zlrGp; ovLa1: request()->replace(array_map(fn($eVLXV) => is_json($eVLXV) ? json_decode($eVLXV, true) : $eVLXV, request()->all())); goto Q8U2T; sxtjz: admin_abort_if(!class_exists("\134\122\141\160\62\150\160\x6f\x75\164\162\x65\x5c\x46\141\163\x74\x45\170\x63\145\x6c\134\x46\141\x73\x74\105\170\x63\x65\154"), admin_trans("\x61\x64\155\151\x6e\56\145\x78\x70\157\x72\164\x2e\160\x6c\x65\141\163\x65\x5f\x69\156\163\164\x61\x6c\154\137\x6c\x61\x72\x61\166\145\154\137\145\170\x63\145\154")); goto ovLa1; Q8U2T: $wSKpS = sprintf("\45\163\x2d\45\x73\56\170\x6c\x73\x78", $this->exportFileName(), date("\131\x6d\144\x48\x69\163")); goto fG2qc; zlrGp: try { fastexcel($F5wSH->get())->export(storage_path("\141\x70\160\57" . $wSKpS), fn($z9GtO) => $this->exportMap($z9GtO)); } catch (\Throwable $gisIz) { report($gisIz); admin_abort(admin_trans("\x61\144\155\x69\156\x2e\x61\143\x74\x69\157\156\137\146\141\151\154\145\144")); } goto gNbS9; fG2qc: $hhpDy = request()->input("\x5f\151\144\163"); goto gWYIf; gNbS9: return $this->response()->success(compact("\x70\141\164\150")); goto e4721; e4721: } protected function exportMap($z9GtO) { return $z9GtO; } protected function exportFileName() { return strtolower(str_replace("\103\157\156\x74\162\x6f\x6c\x6c\x65\162", '', class_basename($this))); } }
