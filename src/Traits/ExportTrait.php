<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto fFl3A; LOXEv: try { fastexcel($On229->get())->export(storage_path("\x61\160\x70\57" . $X7GL0), fn($x0azM) => $this->exportMap($x0azM)); } catch (\Throwable $eRCcN) { report($eRCcN); admin_abort(admin_trans("\141\144\x6d\151\x6e\56\141\143\x74\151\x6f\x6e\x5f\146\141\151\x6c\145\x64")); } goto fBeW_; MtWYf: $zaIwv = request()->input("\x5f\x69\144\163"); goto ZEYtw; ZEYtw: $On229 = $this->service->listQuery()->when($zaIwv, function ($On229) use($zaIwv) { return $On229->whereIn($this->service->getModel()->getTable() . "\x2e" . $this->service->primaryKey(), explode("\x2c", $zaIwv)); }); goto LOXEv; fBeW_: return $this->response()->success(compact("\x70\x61\x74\x68")); goto ecRvl; ELoM3: request()->replace(array_map(fn($wTXX8) => is_json($wTXX8) ? json_decode($wTXX8, true) : $wTXX8, request()->all())); goto YJr42; YJr42: $X7GL0 = sprintf("\45\x73\x2d\45\x73\56\x78\x6c\163\x78", $this->exportFileName(), date("\x59\155\x64\110\151\163")); goto MtWYf; fFl3A: admin_abort_if(!class_exists("\x5c\122\x61\160\62\150\160\157\165\164\162\145\134\106\141\163\164\105\x78\x63\145\x6c\x5c\x46\141\163\x74\x45\170\143\x65\x6c"), admin_trans("\x61\144\x6d\x69\x6e\x2e\145\x78\x70\157\x72\x74\x2e\160\x6c\x65\x61\163\145\137\x69\x6e\x73\164\x61\x6c\154\137\x6c\x61\x72\x61\166\x65\x6c\137\x65\x78\143\x65\154")); goto ELoM3; ecRvl: } protected function exportMap($x0azM) { return $x0azM; } protected function exportFileName() { return strtolower(str_replace("\x43\157\x6e\x74\162\157\x6c\154\x65\x72", '', class_basename($this))); } }
