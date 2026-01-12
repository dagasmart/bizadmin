<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto oP5Ob; z_VxG: $pNlYO = $this->service->listQuery()->when($m_83k, function ($pNlYO) use($m_83k) { return $pNlYO->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\54", $m_83k)); }); goto zOf6X; oYFzv: $m_83k = request()->input("\137\x69\144\163"); goto z_VxG; VgClb: return $this->response()->success(compact("\x70\141\x74\x68")); goto FvlXE; zOf6X: try { fastexcel($pNlYO->get())->export(storage_path("\x61\x70\160\57" . $vDWeX), fn($RXjsd) => $this->exportMap($RXjsd)); } catch (\Throwable $YZkjO) { report($YZkjO); admin_abort(admin_trans("\141\x64\155\151\x6e\x2e\x61\x63\x74\x69\157\x6e\137\146\141\x69\x6c\145\x64")); } goto VgClb; wV9sV: request()->replace(array_map(fn($MB3ct) => is_json($MB3ct) ? json_decode($MB3ct, true) : $MB3ct, request()->all())); goto Hm__7; Hm__7: $vDWeX = sprintf("\x25\163\x2d\x25\x73\56\170\154\163\x78", $this->exportFileName(), date("\131\155\x64\x48\x69\163")); goto oYFzv; oP5Ob: admin_abort_if(!class_exists("\134\122\141\160\x32\150\160\x6f\165\164\x72\x65\134\x46\x61\163\x74\105\170\143\145\x6c\134\106\x61\x73\x74\x45\x78\x63\x65\154"), admin_trans("\141\x64\x6d\151\x6e\x2e\x65\170\160\157\162\x74\56\160\154\x65\x61\163\145\x5f\x69\x6e\163\164\141\154\x6c\137\154\141\x72\141\166\145\x6c\x5f\145\x78\x63\x65\x6c")); goto wV9sV; FvlXE: } protected function exportMap($RXjsd) { return $RXjsd; } protected function exportFileName() { return strtolower(str_replace("\x43\x6f\x6e\x74\162\157\154\x6c\x65\x72", '', class_basename($this))); } }
