<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:53              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $L5G_M = []) { $this->attributes = $L5G_M; } public function get($mYl47, $kuI9k = null) { return Arr::get($this->attributes, $mYl47, $kuI9k); } public function set($mYl47, $kQ6P9) { goto znW2g; c3CDz: Arr::set($nqEfZ, $mYl47, $kQ6P9); goto n0lzZ; n0lzZ: return new static($nqEfZ); goto MB1JG; znW2g: $nqEfZ = $this->attributes; goto c3CDz; MB1JG: } public function delete($mYl47) { goto wY2dA; wY2dA: $nqEfZ = $this->attributes; goto m4Itk; m4Itk: Arr::forget($nqEfZ, $mYl47); goto n2jiK; n2jiK: return new static($nqEfZ); goto XZ71W; XZ71W: } public function __get($YpkaR) { return $this->get(str_replace("\137", "\55", $YpkaR)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
