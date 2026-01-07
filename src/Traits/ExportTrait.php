<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto ClHQa; ClHQa: admin_abort_if(!class_exists("\134\x52\141\x70\62\150\160\x6f\x75\164\162\x65\x5c\106\x61\163\164\x45\x78\143\x65\154\134\x46\141\163\x74\x45\x78\x63\145\x6c"), admin_trans("\141\x64\x6d\x69\156\x2e\145\x78\160\x6f\162\164\56\x70\x6c\145\141\163\x65\x5f\151\x6e\x73\164\141\x6c\x6c\137\154\141\x72\141\x76\145\x6c\137\x65\x78\x63\145\154")); goto s7B3p; CNjol: return $this->response()->success(compact("\160\141\x74\x68")); goto YTuSU; heVXo: $zlKvU = sprintf("\x25\163\55\x25\163\x2e\x78\154\x73\x78", $this->exportFileName(), date("\x59\x6d\144\x48\x69\163")); goto KKTLe; roojB: try { fastexcel($U1_uc->get())->export(storage_path("\x61\x70\160\x2f" . $zlKvU), fn($b2PXl) => $this->exportMap($b2PXl)); } catch (\Throwable $Z3JTx) { report($Z3JTx); admin_abort(admin_trans("\x61\144\155\x69\156\56\x61\x63\x74\x69\157\x6e\x5f\x66\141\x69\x6c\x65\x64")); } goto CNjol; s7B3p: request()->replace(array_map(fn($nbxtl) => is_json($nbxtl) ? json_decode($nbxtl, true) : $nbxtl, request()->all())); goto heVXo; KKTLe: $wstFL = request()->input("\x5f\151\x64\x73"); goto LvZQl; LvZQl: $U1_uc = $this->service->listQuery()->when($wstFL, function ($U1_uc) use($wstFL) { return $U1_uc->whereIn($this->service->getModel()->getTable() . "\x2e" . $this->service->primaryKey(), explode("\54", $wstFL)); }); goto roojB; YTuSU: } protected function exportMap($b2PXl) { return $b2PXl; } protected function exportFileName() { return strtolower(str_replace("\103\157\x6e\x74\x72\x6f\x6c\x6c\145\162", '', class_basename($this))); } }
