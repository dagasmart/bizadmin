<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $v6AJv = []) { $this->attributes = $v6AJv; } public function get($G58bN, $VwiIN = null) { return Arr::get($this->attributes, $G58bN, $VwiIN); } public function set($G58bN, $ZQyAg) { goto oVyZj; oVyZj: $AoSh1 = $this->attributes; goto s2O9Y; nTO8x: return new static($AoSh1); goto qImAN; s2O9Y: Arr::set($AoSh1, $G58bN, $ZQyAg); goto nTO8x; qImAN: } public function delete($G58bN) { goto D0Wn9; VuFdw: return new static($AoSh1); goto GmJXY; DfoU2: Arr::forget($AoSh1, $G58bN); goto VuFdw; D0Wn9: $AoSh1 = $this->attributes; goto DfoU2; GmJXY: } public function __get($Pk2Xe) { return $this->get(str_replace("\137", "\x2d", $Pk2Xe)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
