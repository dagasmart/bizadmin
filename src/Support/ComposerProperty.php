<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $Q1U_o = []) { $this->attributes = $Q1U_o; } public function get($pCJnP, $r9yi5 = null) { return Arr::get($this->attributes, $pCJnP, $r9yi5); } public function set($pCJnP, $NPzBA) { goto FrNHF; NEGbP: return new static($gQWMD); goto i_HAd; hk72p: Arr::set($gQWMD, $pCJnP, $NPzBA); goto NEGbP; FrNHF: $gQWMD = $this->attributes; goto hk72p; i_HAd: } public function delete($pCJnP) { goto sk8_5; RWJMv: Arr::forget($gQWMD, $pCJnP); goto KsdNV; KsdNV: return new static($gQWMD); goto E2kNP; sk8_5: $gQWMD = $this->attributes; goto RWJMv; E2kNP: } public function __get($agbTa) { return $this->get(str_replace("\x5f", "\55", $agbTa)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
