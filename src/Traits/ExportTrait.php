<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto EEjXr; EEjXr: admin_abort_if(!class_exists("\134\x52\x61\160\x32\x68\x70\157\x75\164\x72\x65\x5c\x46\141\x73\x74\105\x78\143\x65\154\134\106\x61\x73\164\105\170\143\145\x6c"), admin_trans("\x61\144\x6d\151\156\x2e\x65\170\160\157\x72\164\56\160\154\x65\141\163\x65\x5f\151\x6e\163\x74\141\154\154\137\154\141\x72\x61\x76\145\x6c\137\145\x78\x63\145\x6c")); goto H0Q8a; XC30u: $q6KW6 = $this->service->listQuery()->when($FaUsO, function ($q6KW6) use($FaUsO) { return $q6KW6->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\x2c", $FaUsO)); }); goto bQ6yl; EBldR: return $this->response()->success(compact("\x70\x61\x74\150")); goto xctsR; lJr1E: $FaUsO = request()->input("\x5f\x69\x64\163"); goto XC30u; H0Q8a: request()->replace(array_map(fn($HsTJG) => is_json($HsTJG) ? json_decode($HsTJG, true) : $HsTJG, request()->all())); goto Xaqsm; Xaqsm: $Sv1lc = sprintf("\45\x73\55\x25\x73\56\x78\154\163\x78", $this->exportFileName(), date("\131\155\x64\110\151\x73")); goto lJr1E; bQ6yl: try { fastexcel($q6KW6->get())->export(storage_path("\x61\x70\160\57" . $Sv1lc), fn($CTVdG) => $this->exportMap($CTVdG)); } catch (\Throwable $ORAT3) { report($ORAT3); admin_abort(admin_trans("\x61\144\155\x69\156\x2e\141\143\x74\151\x6f\x6e\x5f\x66\141\151\154\145\x64")); } goto EBldR; xctsR: } protected function exportMap($CTVdG) { return $CTVdG; } protected function exportFileName() { return strtolower(str_replace("\x43\x6f\156\x74\162\157\x6c\154\145\x72", '', class_basename($this))); } }
