<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $O2dft = []) { $this->attributes = $O2dft; } public function get($kqXIk, $yeMVh = null) { return Arr::get($this->attributes, $kqXIk, $yeMVh); } public function set($kqXIk, $pXN3t) { goto bSwEJ; bSwEJ: $oYAH0 = $this->attributes; goto aIZOx; w7sEV: return new static($oYAH0); goto dLT_v; aIZOx: Arr::set($oYAH0, $kqXIk, $pXN3t); goto w7sEV; dLT_v: } public function delete($kqXIk) { goto OP_jo; erJQb: return new static($oYAH0); goto V07Hp; AwE4h: Arr::forget($oYAH0, $kqXIk); goto erJQb; OP_jo: $oYAH0 = $this->attributes; goto AwE4h; V07Hp: } public function __get($Z1tHR) { return $this->get(str_replace("\x5f", "\55", $Z1tHR)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
