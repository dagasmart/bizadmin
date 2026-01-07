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
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $REoPi = []) { $this->attributes = $REoPi; } public function get($UgLSm, $kbdi2 = null) { return Arr::get($this->attributes, $UgLSm, $kbdi2); } public function set($UgLSm, $hsIzH) { goto plg9A; Ao2yl: return new static($VmWj5); goto eKmqQ; plg9A: $VmWj5 = $this->attributes; goto fC4Ti; fC4Ti: Arr::set($VmWj5, $UgLSm, $hsIzH); goto Ao2yl; eKmqQ: } public function delete($UgLSm) { goto vA2s9; PX7kA: return new static($VmWj5); goto VwceQ; vA2s9: $VmWj5 = $this->attributes; goto h8psq; h8psq: Arr::forget($VmWj5, $UgLSm); goto PX7kA; VwceQ: } public function __get($nZRUA) { return $this->get(str_replace("\x5f", "\x2d", $nZRUA)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
