<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:49              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto SUL52; VI3Ec: $Ye93s = $this->service->listQuery()->when($XG9Hk, function ($Ye93s) use($XG9Hk) { return $Ye93s->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\x2c", $XG9Hk)); }); goto imh91; ZPIFd: request()->replace(array_map(fn($NtyWv) => is_json($NtyWv) ? json_decode($NtyWv, true) : $NtyWv, request()->all())); goto UGkqX; UGkqX: $e01IC = sprintf("\x25\x73\x2d\x25\x73\56\170\x6c\163\x78", $this->exportFileName(), date("\x59\x6d\144\x48\151\163")); goto FAmkH; SUL52: admin_abort_if(!class_exists("\134\122\x61\160\x32\x68\x70\157\x75\x74\x72\145\134\x46\x61\x73\164\x45\170\143\145\x6c\134\x46\x61\163\x74\105\x78\x63\x65\154"), admin_trans("\141\x64\x6d\x69\x6e\56\145\170\160\x6f\x72\x74\x2e\x70\x6c\145\x61\x73\x65\137\x69\x6e\163\164\141\154\154\x5f\154\141\x72\x61\166\x65\x6c\x5f\x65\170\x63\x65\154")); goto ZPIFd; imh91: try { fastexcel($Ye93s->get())->export(storage_path("\x61\x70\x70\x2f" . $e01IC), fn($z_S1x) => $this->exportMap($z_S1x)); } catch (\Throwable $nEc3H) { report($nEc3H); admin_abort(admin_trans("\x61\144\x6d\151\x6e\x2e\x61\x63\x74\151\x6f\x6e\137\146\141\151\x6c\x65\144")); } goto dVugE; dVugE: return $this->response()->success(compact("\x70\141\x74\x68")); goto fcBew; FAmkH: $XG9Hk = request()->input("\137\x69\144\163"); goto VI3Ec; fcBew: } protected function exportMap($z_S1x) { return $z_S1x; } protected function exportFileName() { return strtolower(str_replace("\x43\x6f\x6e\164\162\157\154\x6c\145\x72", '', class_basename($this))); } }
