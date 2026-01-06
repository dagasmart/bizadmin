<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $VwJ_p = []) { $this->attributes = $VwJ_p; } public function get($s_0_B, $Cs_8o = null) { return Arr::get($this->attributes, $s_0_B, $Cs_8o); } public function set($s_0_B, $pJPDm) { goto Tpnl3; E6TW_: return new static($fJmPC); goto eJ4Ki; Tpnl3: $fJmPC = $this->attributes; goto drv1s; drv1s: Arr::set($fJmPC, $s_0_B, $pJPDm); goto E6TW_; eJ4Ki: } public function delete($s_0_B) { goto zytVM; tbXCx: Arr::forget($fJmPC, $s_0_B); goto tNN52; tNN52: return new static($fJmPC); goto LqK_d; zytVM: $fJmPC = $this->attributes; goto tbXCx; LqK_d: } public function __get($MeMAA) { return $this->get(str_replace("\137", "\x2d", $MeMAA)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
