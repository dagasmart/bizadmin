<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto w3Roh; WLUqp: try { fastexcel($w140e->get())->export(storage_path("\141\160\160\x2f" . $RlmSt), fn($ztnPd) => $this->exportMap($ztnPd)); } catch (\Throwable $IiXrz) { report($IiXrz); admin_abort(admin_trans("\141\144\155\151\x6e\x2e\141\x63\164\151\157\156\137\x66\141\x69\x6c\145\x64")); } goto annuW; annuW: return $this->response()->success(compact("\x70\x61\164\150")); goto YZgGH; u1I5A: $ZY4rR = request()->input("\x5f\x69\x64\x73"); goto OLwOv; OLwOv: $w140e = $this->service->listQuery()->when($ZY4rR, function ($w140e) use($ZY4rR) { return $w140e->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\x2c", $ZY4rR)); }); goto WLUqp; nw7X_: $RlmSt = sprintf("\x25\163\55\x25\163\56\x78\154\x73\x78", $this->exportFileName(), date("\x59\x6d\x64\x48\x69\163")); goto u1I5A; x6q8o: request()->replace(array_map(fn($Z9bPa) => is_json($Z9bPa) ? json_decode($Z9bPa, true) : $Z9bPa, request()->all())); goto nw7X_; w3Roh: admin_abort_if(!class_exists("\134\x52\141\x70\x32\150\160\x6f\x75\164\162\x65\x5c\106\x61\x73\x74\x45\170\143\145\154\x5c\x46\x61\163\164\105\170\143\145\154"), admin_trans("\141\x64\x6d\x69\156\x2e\x65\170\x70\157\162\x74\56\x70\x6c\x65\141\163\x65\137\x69\x6e\x73\x74\x61\154\x6c\137\x6c\141\x72\141\x76\145\x6c\x5f\x65\x78\x63\145\x6c")); goto x6q8o; YZgGH: } protected function exportMap($ztnPd) { return $ztnPd; } protected function exportFileName() { return strtolower(str_replace("\103\157\156\x74\x72\157\x6c\154\x65\162", '', class_basename($this))); } }
