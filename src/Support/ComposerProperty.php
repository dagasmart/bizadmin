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
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $eYgQj = []) { $this->attributes = $eYgQj; } public function get($KrK3o, $d0eKH = null) { return Arr::get($this->attributes, $KrK3o, $d0eKH); } public function set($KrK3o, $Vo9QL) { goto cXdxE; PSrOZ: Arr::set($i3BYt, $KrK3o, $Vo9QL); goto hXADb; hXADb: return new static($i3BYt); goto uaEg0; cXdxE: $i3BYt = $this->attributes; goto PSrOZ; uaEg0: } public function delete($KrK3o) { goto bWg2n; jqLkp: Arr::forget($i3BYt, $KrK3o); goto YbPmI; YbPmI: return new static($i3BYt); goto p6aa9; bWg2n: $i3BYt = $this->attributes; goto jqLkp; p6aa9: } public function __get($maQNe) { return $this->get(str_replace("\137", "\55", $maQNe)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
