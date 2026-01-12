<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto xOQCC; sCQRT: $HpvUM = $this->service->listQuery()->when($fzSnY, function ($HpvUM) use($fzSnY) { return $HpvUM->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\x2c", $fzSnY)); }); goto W2Zsy; W2Zsy: try { fastexcel($HpvUM->get())->export(storage_path("\141\x70\x70\57" . $MenEg), fn($s_Akp) => $this->exportMap($s_Akp)); } catch (\Throwable $bBnMB) { report($bBnMB); admin_abort(admin_trans("\141\144\155\151\x6e\x2e\x61\143\164\151\157\156\x5f\x66\141\151\x6c\x65\144")); } goto nfPBL; nfPBL: return $this->response()->success(compact("\160\x61\164\150")); goto b_uaM; VbMYl: request()->replace(array_map(fn($nJ5pV) => is_json($nJ5pV) ? json_decode($nJ5pV, true) : $nJ5pV, request()->all())); goto d5ijL; ERVjU: $fzSnY = request()->input("\137\151\144\x73"); goto sCQRT; xOQCC: admin_abort_if(!class_exists("\x5c\x52\141\x70\x32\150\x70\x6f\165\x74\162\x65\134\106\141\163\x74\105\x78\x63\x65\154\134\106\141\x73\164\x45\x78\x63\x65\154"), admin_trans("\x61\144\155\151\x6e\56\x65\x78\x70\x6f\x72\164\x2e\160\x6c\x65\x61\x73\145\137\151\x6e\x73\164\141\x6c\x6c\x5f\x6c\141\x72\141\166\x65\x6c\137\145\x78\143\x65\154")); goto VbMYl; d5ijL: $MenEg = sprintf("\x25\163\55\45\x73\56\170\x6c\163\170", $this->exportFileName(), date("\x59\x6d\144\x48\151\x73")); goto ERVjU; b_uaM: } protected function exportMap($s_Akp) { return $s_Akp; } protected function exportFileName() { return strtolower(str_replace("\x43\x6f\x6e\164\162\157\x6c\154\x65\x72", '', class_basename($this))); } }
