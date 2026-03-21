<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto xRsqB; TLxEl: $ICl39 = sprintf("\x25\x73\55\x25\x73\56\170\154\x73\x78", $this->exportFileName(), date("\x59\x6d\144\110\x69\163")); goto QPAMy; QPAMy: $rBPHG = request()->input("\x5f\x69\144\x73"); goto JJuQg; M2CiM: return $this->response()->success(compact("\160\141\164\150")); goto eUP03; feG98: try { fastexcel($cSoU0->get())->export(storage_path("\141\x70\x70\57" . $ICl39), fn($jWy3x) => $this->exportMap($jWy3x)); } catch (\Throwable $OiXs7) { report($OiXs7); admin_abort(admin_trans("\141\x64\155\151\156\56\x61\143\x74\x69\x6f\156\x5f\x66\141\151\x6c\145\144")); } goto M2CiM; JJuQg: $cSoU0 = $this->service->listQuery()->when($rBPHG, function ($cSoU0) use($rBPHG) { return $cSoU0->whereIn($this->service->getModel()->getTable() . "\x2e" . $this->service->primaryKey(), explode("\54", $rBPHG)); }); goto feG98; KW4qI: request()->replace(array_map(fn($qfjJe) => is_json($qfjJe) ? json_decode($qfjJe, true) : $qfjJe, request()->all())); goto TLxEl; xRsqB: admin_abort_if(!class_exists("\134\x52\141\160\x32\x68\x70\x6f\x75\164\x72\x65\x5c\x46\x61\163\x74\x45\x78\x63\145\154\134\x46\141\163\x74\x45\x78\143\145\x6c"), admin_trans("\x61\x64\155\151\156\56\145\170\160\x6f\162\164\56\x70\x6c\x65\141\x73\145\137\x69\156\x73\x74\141\x6c\x6c\x5f\154\141\x72\x61\166\x65\x6c\137\145\x78\143\145\x6c")); goto KW4qI; eUP03: } protected function exportMap($jWy3x) { return $jWy3x; } protected function exportFileName() { return strtolower(str_replace("\103\157\x6e\x74\x72\x6f\x6c\154\145\x72", '', class_basename($this))); } }
