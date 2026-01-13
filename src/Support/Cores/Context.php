<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:49              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use Illuminate\Support\Arr; use Illuminate\Support\Fluent; use DagaSmart\BizAdmin\Support\Helper; class Context extends Fluent { public function set($NkVp_, $JqsAq = null) { goto NBzbj; NBzbj: $Nc3_h = is_array($NkVp_) ? $NkVp_ : [$NkVp_ => $JqsAq]; goto UaS85; UaS85: foreach ($Nc3_h as $NkVp_ => $JqsAq) { Arr::set($this->attributes, $NkVp_, $JqsAq); rIGL6: } goto XrK44; acO2W: return $this; goto IGNUo; XrK44: oOXyo: goto acO2W; IGNUo: } public function get($NkVp_, $UVE4E = null) { return Arr::get($this->attributes, $NkVp_, $UVE4E); } public function remember($NkVp_, \Closure $MlbLS) { goto QLPg6; fSLGj: return tap($MlbLS(), function ($JqsAq) use($NkVp_) { $this->set($NkVp_, $JqsAq); }); goto iP6tp; Fl1LV: return $JqsAq; goto x9y6f; x9y6f: Dn30K: goto fSLGj; QLPg6: if (!(($JqsAq = $this->get($NkVp_)) !== null)) { goto Dn30K; } goto Fl1LV; iP6tp: } public function getArray($NkVp_, $UVE4E = null) { return Helper::array($this->get($NkVp_, $UVE4E), false); } public function add($NkVp_, $JqsAq, $fey1V = null) { goto tl2Ex; tl2Ex: $VybKc = $this->getArray($NkVp_); goto GCzWp; GCzWp: if ($fey1V === null) { goto xUBHA; } goto ZrYgX; B3yJq: xUBHA: goto TMpJT; cy3VT: hsScc: goto I3f_M; I3f_M: return $this->set($NkVp_, $VybKc); goto Ld81Y; ZrYgX: $VybKc[$fey1V] = $JqsAq; goto nVKos; TMpJT: $VybKc[] = $JqsAq; goto cy3VT; nVKos: goto hsScc; goto B3yJq; Ld81Y: } public function merge($NkVp_, array $JqsAq) { $VybKc = $this->getArray($NkVp_); return $this->set($NkVp_, array_merge($VybKc, $JqsAq)); } public function forget($okf5u) { Arr::forget($this->attributes, $okf5u); } public function flush() { $this->attributes = []; } }
