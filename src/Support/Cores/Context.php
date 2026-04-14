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
 namespace DagaSmart\BizAdmin\Support\Cores; use Illuminate\Support\Arr; use Illuminate\Support\Fluent; use DagaSmart\BizAdmin\Support\Helper; class Context extends Fluent { public function set($kqXIk, $msRQo = null) { goto CSss9; xJ5l0: BEypC: goto HvWUK; CSss9: $MvDNw = is_array($kqXIk) ? $kqXIk : [$kqXIk => $msRQo]; goto trf8f; trf8f: foreach ($MvDNw as $kqXIk => $msRQo) { Arr::set($this->attributes, $kqXIk, $msRQo); HXJ36: } goto xJ5l0; HvWUK: return $this; goto Us5m7; Us5m7: } public function get($kqXIk, $yeMVh = null) { return Arr::get($this->attributes, $kqXIk, $yeMVh); } public function remember($kqXIk, \Closure $Jv621) { goto kkNOO; zb8XV: return tap($Jv621(), function ($msRQo) use($kqXIk) { $this->set($kqXIk, $msRQo); }); goto fylq_; kkNOO: if (!(($msRQo = $this->get($kqXIk)) !== null)) { goto bvVqx; } goto QB3if; lUO_P: bvVqx: goto zb8XV; QB3if: return $msRQo; goto lUO_P; fylq_: } public function getArray($kqXIk, $yeMVh = null) { return Helper::array($this->get($kqXIk, $yeMVh), false); } public function add($kqXIk, $msRQo, $fBmpg = null) { goto cXgbK; cXgbK: $Hxv2r = $this->getArray($kqXIk); goto r7mQQ; r7mQQ: if ($fBmpg === null) { goto MFamU; } goto F9eZS; K031e: return $this->set($kqXIk, $Hxv2r); goto ukU2n; F9eZS: $Hxv2r[$fBmpg] = $msRQo; goto wWw1R; jpiAf: qgBsI: goto K031e; c4wLv: $Hxv2r[] = $msRQo; goto jpiAf; aJReG: MFamU: goto c4wLv; wWw1R: goto qgBsI; goto aJReG; ukU2n: } public function merge($kqXIk, array $msRQo) { $Hxv2r = $this->getArray($kqXIk); return $this->set($kqXIk, array_merge($Hxv2r, $msRQo)); } public function forget($c7_NB) { Arr::forget($this->attributes, $c7_NB); } public function flush() { $this->attributes = []; } }
