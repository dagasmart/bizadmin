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
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $ngYLn = []) { $this->attributes = $ngYLn; } public function get($NkVp_, $UVE4E = null) { return Arr::get($this->attributes, $NkVp_, $UVE4E); } public function set($NkVp_, $QpTWF) { goto x5zCn; HQ0ga: Arr::set($xLyGV, $NkVp_, $QpTWF); goto zgUlh; x5zCn: $xLyGV = $this->attributes; goto HQ0ga; zgUlh: return new static($xLyGV); goto eI_y4; eI_y4: } public function delete($NkVp_) { goto rhFIj; h1Cr_: Arr::forget($xLyGV, $NkVp_); goto PsioF; rhFIj: $xLyGV = $this->attributes; goto h1Cr_; PsioF: return new static($xLyGV); goto fLisI; fLisI: } public function __get($GkRP7) { return $this->get(str_replace("\x5f", "\55", $GkRP7)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
