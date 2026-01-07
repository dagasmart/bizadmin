<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:08              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto TLpAN; zGM9q: $Kukio = $this->service->listQuery()->when($ZmjKx, function ($Kukio) use($ZmjKx) { return $Kukio->whereIn($this->service->getModel()->getTable() . "\x2e" . $this->service->primaryKey(), explode("\54", $ZmjKx)); }); goto NUGTt; NUGTt: try { fastexcel($Kukio->get())->export(storage_path("\141\x70\x70\57" . $zz5OM), fn($faKX7) => $this->exportMap($faKX7)); } catch (\Throwable $QsWct) { report($QsWct); admin_abort(admin_trans("\141\144\155\151\x6e\x2e\141\x63\164\x69\x6f\156\x5f\x66\141\x69\x6c\145\144")); } goto CF_Qw; vkqN9: $ZmjKx = request()->input("\x5f\x69\x64\x73"); goto zGM9q; CF_Qw: return $this->response()->success(compact("\x70\141\x74\x68")); goto A6RhG; i1aNJ: request()->replace(array_map(fn($ItAOs) => is_json($ItAOs) ? json_decode($ItAOs, true) : $ItAOs, request()->all())); goto Ys3p7; Ys3p7: $zz5OM = sprintf("\x25\x73\55\45\163\x2e\170\x6c\x73\170", $this->exportFileName(), date("\131\x6d\x64\x48\151\x73")); goto vkqN9; TLpAN: admin_abort_if(!class_exists("\134\x52\141\x70\62\x68\x70\157\165\164\162\x65\x5c\x46\x61\x73\164\x45\x78\143\145\x6c\134\106\x61\163\x74\105\x78\x63\145\x6c"), admin_trans("\x61\x64\155\x69\x6e\56\145\170\x70\x6f\162\164\56\160\154\145\x61\163\145\137\151\x6e\x73\x74\x61\x6c\154\137\x6c\141\162\x61\166\x65\x6c\137\x65\x78\143\145\x6c")); goto i1aNJ; A6RhG: } protected function exportMap($faKX7) { return $faKX7; } protected function exportFileName() { return strtolower(str_replace("\103\157\x6e\x74\162\157\x6c\154\145\162", '', class_basename($this))); } }
