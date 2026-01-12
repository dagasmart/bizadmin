<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:01              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto n83gV; CttOC: try { fastexcel($C35Ce->get())->export(storage_path("\141\x70\160\57" . $doLfm), fn($kaHLo) => $this->exportMap($kaHLo)); } catch (\Throwable $I2kMx) { report($I2kMx); admin_abort(admin_trans("\x61\x64\155\151\x6e\x2e\141\x63\164\x69\x6f\x6e\x5f\x66\x61\151\x6c\x65\144")); } goto l5MsQ; wiirz: $doLfm = sprintf("\x25\163\55\45\163\56\x78\x6c\x73\170", $this->exportFileName(), date("\131\155\x64\110\151\163")); goto Jyw7F; Jyw7F: $bYKkZ = request()->input("\x5f\x69\x64\163"); goto eQ1wG; n83gV: admin_abort_if(!class_exists("\134\122\x61\x70\62\x68\160\157\x75\x74\x72\145\134\106\x61\163\164\x45\170\x63\145\x6c\x5c\106\x61\x73\164\x45\170\x63\x65\154"), admin_trans("\141\144\x6d\x69\x6e\56\x65\x78\160\x6f\x72\164\56\160\x6c\x65\141\x73\x65\137\x69\156\x73\164\x61\x6c\154\137\154\141\x72\x61\166\x65\154\137\145\170\143\145\x6c")); goto Qr3CF; Qr3CF: request()->replace(array_map(fn($yTx8b) => is_json($yTx8b) ? json_decode($yTx8b, true) : $yTx8b, request()->all())); goto wiirz; l5MsQ: return $this->response()->success(compact("\x70\141\x74\150")); goto C3Hkc; eQ1wG: $C35Ce = $this->service->listQuery()->when($bYKkZ, function ($C35Ce) use($bYKkZ) { return $C35Ce->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\x2c", $bYKkZ)); }); goto CttOC; C3Hkc: } protected function exportMap($kaHLo) { return $kaHLo; } protected function exportFileName() { return strtolower(str_replace("\103\157\x6e\x74\162\x6f\154\154\145\x72", '', class_basename($this))); } }
