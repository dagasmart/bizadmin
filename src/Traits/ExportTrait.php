<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:21              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; use Illuminate\Http\JsonResponse; use Illuminate\Http\Resources\Json\JsonResource; trait ExportTrait { protected function export() { goto VzyLY; Eeoqw: return $this->response()->success(compact("\x70\141\x74\150")); goto L1dwR; USFW3: $hhpDy = request()->input("\137\151\144\163"); goto SLZ4A; SLZ4A: $F5wSH = $this->service->listQuery()->when($hhpDy, function ($F5wSH) use($hhpDy) { return $F5wSH->whereIn($this->service->getModel()->getTable() . "\x2e" . $this->service->primaryKey(), explode("\x2c", $hhpDy)); }); goto GQx82; LoHJ0: $wSKpS = sprintf("\45\x73\55\45\163\x2e\x78\154\163\170", $this->exportFileName(), date("\x59\x6d\x64\x48\x69\x73")); goto USFW3; lUSYn: request()->replace(array_map(fn($eVLXV) => is_json($eVLXV) ? json_decode($eVLXV, true) : $eVLXV, request()->all())); goto LoHJ0; GQx82: try { fastexcel($F5wSH->get())->export(storage_path("\x61\x70\160\x2f" . $wSKpS), fn($z9GtO) => $this->exportMap($z9GtO)); } catch (\Throwable $gisIz) { report($gisIz); admin_abort(admin_trans("\x61\144\x6d\151\x6e\x2e\141\143\x74\151\157\x6e\x5f\146\141\151\x6c\145\144")); } goto Eeoqw; VzyLY: admin_abort_if(!class_exists("\x5c\x52\x61\x70\x32\x68\x70\x6f\165\x74\162\x65\134\106\x61\163\164\105\170\x63\145\x6c\x5c\106\x61\x73\164\x45\170\x63\145\154"), admin_trans("\x61\144\155\x69\x6e\x2e\145\x78\160\x6f\x72\x74\x2e\160\x6c\145\x61\163\145\137\151\x6e\163\x74\x61\154\154\137\x6c\141\162\x61\x76\145\x6c\137\x65\170\143\145\x6c")); goto lUSYn; L1dwR: } protected function exportMap($z9GtO) { return $z9GtO; } protected function exportFileName() { return strtolower(str_replace("\x43\x6f\x6e\164\162\x6f\x6c\154\145\162", '', class_basename($this))); } }
