<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto hK3Ga; x7Sx3: try { fastexcel($gt6o4->get())->export(storage_path("\141\x70\x70\57" . $ALS2w), fn($jAlPd) => $this->exportMap($jAlPd)); } catch (\Throwable $N4FzU) { report($N4FzU); admin_abort(admin_trans("\x61\144\155\x69\156\x2e\x61\143\x74\x69\157\x6e\137\146\x61\x69\x6c\145\144")); } goto NcaeG; V9wjD: $cWram = request()->input("\x5f\151\144\x73"); goto oR5px; iwFW_: $ALS2w = sprintf("\x25\163\x2d\45\x73\56\170\x6c\x73\170", $this->exportFileName(), date("\131\155\x64\x48\x69\x73")); goto V9wjD; oR5px: $gt6o4 = $this->service->listQuery()->when($cWram, function ($gt6o4) use($cWram) { return $gt6o4->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\x2c", $cWram)); }); goto x7Sx3; BB_8J: request()->replace(array_map(fn($S8QYq) => is_json($S8QYq) ? json_decode($S8QYq, true) : $S8QYq, request()->all())); goto iwFW_; NcaeG: return $this->response()->success(compact("\160\141\164\x68")); goto YU8oQ; hK3Ga: admin_abort_if(!class_exists("\134\122\141\x70\x32\x68\x70\x6f\x75\164\162\x65\134\x46\x61\x73\x74\105\x78\143\145\154\134\106\x61\x73\x74\105\170\143\145\x6c"), admin_trans("\x61\x64\155\151\x6e\56\x65\170\x70\157\162\164\56\x70\x6c\145\141\x73\145\x5f\151\x6e\x73\164\x61\x6c\x6c\x5f\154\141\162\x61\166\x65\x6c\137\145\x78\x63\145\154")); goto BB_8J; YU8oQ: } protected function exportMap($jAlPd) { return $jAlPd; } protected function exportFileName() { return strtolower(str_replace("\x43\x6f\x6e\164\x72\157\x6c\154\x65\162", '', class_basename($this))); } }
