<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:42              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto zo7sf; RPxj2: $jAg8I = $this->service->listQuery()->when($iUH_6, function ($jAg8I) use($iUH_6) { return $jAg8I->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\x2c", $iUH_6)); }); goto uozRY; uozRY: try { fastexcel($jAg8I->get())->export(storage_path("\x61\x70\160\x2f" . $nk9G6), fn($ScuwA) => $this->exportMap($ScuwA)); } catch (\Throwable $r2JVV) { report($r2JVV); admin_abort(admin_trans("\141\x64\x6d\x69\156\56\x61\x63\164\151\157\x6e\x5f\146\x61\x69\154\x65\144")); } goto AozE4; NIYRM: $iUH_6 = request()->input("\137\151\144\163"); goto RPxj2; AozE4: return $this->response()->success(compact("\x70\x61\164\150")); goto jFb5H; GfiKg: $nk9G6 = sprintf("\45\x73\x2d\x25\163\56\170\154\x73\170", $this->exportFileName(), date("\x59\x6d\144\x48\151\163")); goto NIYRM; T6rqX: request()->replace(array_map(fn($YS3rG) => is_json($YS3rG) ? json_decode($YS3rG, true) : $YS3rG, request()->all())); goto GfiKg; zo7sf: admin_abort_if(!class_exists("\134\x52\141\x70\62\150\x70\157\165\x74\162\x65\134\106\x61\x73\164\105\170\143\145\x6c\x5c\106\141\163\164\x45\x78\x63\145\x6c"), admin_trans("\x61\x64\x6d\151\x6e\x2e\x65\x78\160\x6f\x72\x74\x2e\160\154\x65\141\x73\145\x5f\x69\x6e\x73\164\141\x6c\154\x5f\154\x61\162\141\166\x65\154\137\145\x78\x63\145\154")); goto T6rqX; jFb5H: } protected function exportMap($ScuwA) { return $ScuwA; } protected function exportFileName() { return strtolower(str_replace("\x43\157\x6e\x74\162\157\154\x6c\145\x72", '', class_basename($this))); } }
