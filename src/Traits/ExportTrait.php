<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:08              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto JUvJj; mlzup: $Saqrl = request()->input("\x5f\x69\144\x73"); goto XBek2; YQOAk: try { fastexcel($rrYEL->get())->export(storage_path("\141\160\x70\57" . $prUsj), fn($gGuhU) => $this->exportMap($gGuhU)); } catch (\Throwable $AwPkn) { report($AwPkn); admin_abort(admin_trans("\141\x64\155\151\156\56\141\x63\x74\151\157\156\x5f\x66\x61\x69\x6c\x65\x64")); } goto X9m1Q; X9m1Q: return $this->response()->success(compact("\160\x61\x74\x68")); goto qXLk8; XBek2: $rrYEL = $this->service->listQuery()->when($Saqrl, function ($rrYEL) use($Saqrl) { return $rrYEL->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\54", $Saqrl)); }); goto YQOAk; TcJVh: $prUsj = sprintf("\45\163\x2d\45\x73\56\x78\x6c\x73\170", $this->exportFileName(), date("\131\x6d\144\x48\151\x73")); goto mlzup; JUvJj: admin_abort_if(!class_exists("\x5c\122\x61\x70\x32\x68\x70\157\165\164\162\x65\134\106\x61\x73\x74\105\x78\143\145\154\x5c\106\141\163\x74\x45\x78\143\x65\x6c"), admin_trans("\x61\144\155\x69\156\56\145\x78\x70\157\x72\164\56\x70\x6c\x65\x61\x73\x65\x5f\151\x6e\x73\164\x61\x6c\154\137\x6c\x61\162\141\166\x65\154\137\x65\x78\143\145\154")); goto gSpfK; gSpfK: request()->replace(array_map(fn($F7jJE) => is_json($F7jJE) ? json_decode($F7jJE, true) : $F7jJE, request()->all())); goto TcJVh; qXLk8: } protected function exportMap($gGuhU) { return $gGuhU; } protected function exportFileName() { return strtolower(str_replace("\x43\x6f\156\164\x72\x6f\x6c\x6c\145\x72", '', class_basename($this))); } }
