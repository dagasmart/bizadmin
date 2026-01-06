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
 namespace DagaSmart\BizAdmin\Support\Cores; class Asset { protected array $js = []; protected array $css = []; protected array $scripts = []; protected array $styles = []; protected $appendNav; protected $prependNav; private function assetsHandler($Vos5q, $p_n6u) { goto BYeGb; IDuSC: llpG8: goto l3xh9; PrVIw: BDh8o: goto nvNH9; GsbuD: goto llpG8; goto PrVIw; nvNH9: $this->{$Vos5q} = array_merge($this->{$Vos5q}, $p_n6u); goto IDuSC; l3xh9: return $this; goto qFGmU; PVPYe: $this->{$Vos5q}[] = $p_n6u; goto GsbuD; NJhlN: if (is_array($p_n6u)) { goto BDh8o; } goto PVPYe; BYeGb: if (!is_null($p_n6u)) { goto NrZN1; } goto cramV; OOKMw: NrZN1: goto NJhlN; cramV: return $this->{$Vos5q}; goto OOKMw; qFGmU: } public function js($Tlosz = null) { return $this->assetsHandler("\152\x73", $Tlosz); } public function css($gN6ze = null) { return $this->assetsHandler("\x63\x73\x73", $gN6ze); } public function scripts($Y20ID = null) { return $this->assetsHandler("\x73\143\162\x69\x70\x74\x73", $Y20ID); } public function styles($Uki0z = null) { return $this->assetsHandler("\163\x74\x79\x6c\145\x73", $Uki0z); } public function appendNav($YPPtP = null) { goto vaOm2; MY3rQ: $this->appendNav = $YPPtP; goto Lb2bF; l8lEh: return $this->appendNav; goto yijHB; yijHB: tr1qH: goto MY3rQ; vaOm2: if (!is_null($YPPtP)) { goto tr1qH; } goto l8lEh; Lb2bF: return $this; goto U0_VY; U0_VY: } public function prependNav($PA1ne = null) { goto YBsg0; ztdqk: $this->prependNav = $PA1ne; goto RekZE; YBsg0: if (!is_null($PA1ne)) { goto mbp_h; } goto XNVnk; RekZE: return $this; goto jYVrI; XNVnk: return $this->prependNav; goto Twl9n; Twl9n: mbp_h: goto ztdqk; jYVrI: } }
