<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $xcmkx = []) { $this->attributes = $xcmkx; } public function get($cNzIY, $HbpGm = null) { return Arr::get($this->attributes, $cNzIY, $HbpGm); } public function set($cNzIY, $gBfro) { goto UJwSK; UJwSK: $tLjC2 = $this->attributes; goto duMJP; duMJP: Arr::set($tLjC2, $cNzIY, $gBfro); goto oJUet; oJUet: return new static($tLjC2); goto ML5Fh; ML5Fh: } public function delete($cNzIY) { goto wvk7b; PlTDQ: Arr::forget($tLjC2, $cNzIY); goto KnQzD; wvk7b: $tLjC2 = $this->attributes; goto PlTDQ; KnQzD: return new static($tLjC2); goto D5I9J; D5I9J: } public function __get($jT6f0) { return $this->get(str_replace("\x5f", "\x2d", $jT6f0)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
