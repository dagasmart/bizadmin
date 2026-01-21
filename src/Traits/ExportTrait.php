<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:53              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto IpStJ; cZlG5: request()->replace(array_map(fn($Sobeh) => is_json($Sobeh) ? json_decode($Sobeh, true) : $Sobeh, request()->all())); goto nGLrX; IpStJ: admin_abort_if(!class_exists("\134\122\141\x70\62\150\x70\157\x75\164\x72\x65\x5c\x46\x61\163\x74\x45\x78\x63\x65\154\x5c\x46\141\x73\x74\x45\x78\143\145\x6c"), admin_trans("\141\x64\155\151\156\x2e\x65\x78\160\157\162\164\x2e\x70\154\x65\x61\x73\x65\x5f\151\x6e\163\x74\x61\x6c\x6c\137\x6c\141\x72\141\166\145\154\137\145\170\x63\x65\154")); goto cZlG5; umtxo: try { fastexcel($UjlOj->get())->export(storage_path("\141\x70\x70\x2f" . $XVxRx), fn($P9crr) => $this->exportMap($P9crr)); } catch (\Throwable $vPj2f) { report($vPj2f); admin_abort(admin_trans("\141\144\x6d\151\156\56\141\143\x74\151\157\156\x5f\146\x61\151\154\x65\144")); } goto mrsD8; sWFwu: $oEuZd = request()->input("\137\x69\x64\163"); goto IWDGy; IWDGy: $UjlOj = $this->service->listQuery()->when($oEuZd, function ($UjlOj) use($oEuZd) { return $UjlOj->whereIn($this->service->getModel()->getTable() . "\56" . $this->service->primaryKey(), explode("\54", $oEuZd)); }); goto umtxo; mrsD8: return $this->response()->success(compact("\x70\141\164\150")); goto AFjJn; nGLrX: $XVxRx = sprintf("\45\163\x2d\x25\163\x2e\170\x6c\163\x78", $this->exportFileName(), date("\131\x6d\144\x48\151\x73")); goto sWFwu; AFjJn: } protected function exportMap($P9crr) { return $P9crr; } protected function exportFileName() { return strtolower(str_replace("\x43\157\x6e\x74\162\x6f\x6c\x6c\145\x72", '', class_basename($this))); } }
