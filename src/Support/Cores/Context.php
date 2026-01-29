<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use Illuminate\Support\Arr; use Illuminate\Support\Fluent; use DagaSmart\BizAdmin\Support\Helper; class Context extends Fluent { public function set($KrK3o, $PfrF0 = null) { goto vAqaA; DOKv4: return $this; goto HPMnE; vAqaA: $Scqzw = is_array($KrK3o) ? $KrK3o : [$KrK3o => $PfrF0]; goto W3auy; W3auy: foreach ($Scqzw as $KrK3o => $PfrF0) { Arr::set($this->attributes, $KrK3o, $PfrF0); gSEEy: } goto aKjEO; aKjEO: tIWJ5: goto DOKv4; HPMnE: } public function get($KrK3o, $d0eKH = null) { return Arr::get($this->attributes, $KrK3o, $d0eKH); } public function remember($KrK3o, \Closure $klB6i) { goto A1s3N; npCIL: return $PfrF0; goto K1ani; A1s3N: if (!(($PfrF0 = $this->get($KrK3o)) !== null)) { goto YtMA9; } goto npCIL; K1ani: YtMA9: goto HnLsY; HnLsY: return tap($klB6i(), function ($PfrF0) use($KrK3o) { $this->set($KrK3o, $PfrF0); }); goto nVjal; nVjal: } public function getArray($KrK3o, $d0eKH = null) { return Helper::array($this->get($KrK3o, $d0eKH), false); } public function add($KrK3o, $PfrF0, $OIz8D = null) { goto HMPqh; TBKdq: $yMQID[] = $PfrF0; goto NXzCK; slycU: wJRmV: goto TBKdq; C0Fil: $yMQID[$OIz8D] = $PfrF0; goto WPd1s; HjKEK: if ($OIz8D === null) { goto wJRmV; } goto C0Fil; gIoaq: return $this->set($KrK3o, $yMQID); goto y2BF1; NXzCK: Ppuww: goto gIoaq; HMPqh: $yMQID = $this->getArray($KrK3o); goto HjKEK; WPd1s: goto Ppuww; goto slycU; y2BF1: } public function merge($KrK3o, array $PfrF0) { $yMQID = $this->getArray($KrK3o); return $this->set($KrK3o, array_merge($yMQID, $PfrF0)); } public function forget($GPn19) { Arr::forget($this->attributes, $GPn19); } public function flush() { $this->attributes = []; } }
