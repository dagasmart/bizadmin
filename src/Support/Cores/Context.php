<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use Illuminate\Support\Arr; use Illuminate\Support\Fluent; use DagaSmart\BizAdmin\Support\Helper; class Context extends Fluent { public function set($UgLSm, $w0aoq = null) { goto w7tne; brLcg: K2Foc: goto xGQtS; xGQtS: return $this; goto d3CgG; w7tne: $OFJRl = is_array($UgLSm) ? $UgLSm : [$UgLSm => $w0aoq]; goto GIWR1; GIWR1: foreach ($OFJRl as $UgLSm => $w0aoq) { Arr::set($this->attributes, $UgLSm, $w0aoq); QQrDz: } goto brLcg; d3CgG: } public function get($UgLSm, $kbdi2 = null) { return Arr::get($this->attributes, $UgLSm, $kbdi2); } public function remember($UgLSm, \Closure $RX6jQ) { goto imSoI; Ogqge: return tap($RX6jQ(), function ($w0aoq) use($UgLSm) { $this->set($UgLSm, $w0aoq); }); goto HXk1N; Nsq4f: WuJ0h: goto Ogqge; imSoI: if (!(($w0aoq = $this->get($UgLSm)) !== null)) { goto WuJ0h; } goto ulzkP; ulzkP: return $w0aoq; goto Nsq4f; HXk1N: } public function getArray($UgLSm, $kbdi2 = null) { return Helper::array($this->get($UgLSm, $kbdi2), false); } public function add($UgLSm, $w0aoq, $SLxWh = null) { goto P2Pzw; P2Pzw: $Dj6vG = $this->getArray($UgLSm); goto rmx5k; YcJ1F: CgfDR: goto E4drG; V5hvm: a97WQ: goto zaK7k; E4drG: $Dj6vG[] = $w0aoq; goto V5hvm; rmx5k: if ($SLxWh === null) { goto CgfDR; } goto AWhZP; yJegR: goto a97WQ; goto YcJ1F; zaK7k: return $this->set($UgLSm, $Dj6vG); goto i1Anl; AWhZP: $Dj6vG[$SLxWh] = $w0aoq; goto yJegR; i1Anl: } public function merge($UgLSm, array $w0aoq) { $Dj6vG = $this->getArray($UgLSm); return $this->set($UgLSm, array_merge($Dj6vG, $w0aoq)); } public function forget($QpfLV) { Arr::forget($this->attributes, $QpfLV); } public function flush() { $this->attributes = []; } }
