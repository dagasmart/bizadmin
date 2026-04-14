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
 namespace DagaSmart\BizAdmin\Support\Cores; class Asset { protected array $js = []; protected array $css = []; protected array $scripts = []; protected array $styles = []; protected $appendNav; protected $prependNav; private function assetsHandler($M_AVG, $zz3A5) { goto EscPF; xW28Q: iZCPW: goto GO17b; r4ciJ: goto iZCPW; goto OwabF; dPDe1: GRhVv: goto kYoQK; GO17b: return $this; goto PWfoB; HCkoS: $this->{$M_AVG}[] = $zz3A5; goto r4ciJ; EscPF: if (!is_null($zz3A5)) { goto GRhVv; } goto WB7Cx; WB7Cx: return $this->{$M_AVG}; goto dPDe1; j5zUF: $this->{$M_AVG} = array_merge($this->{$M_AVG}, $zz3A5); goto xW28Q; kYoQK: if (is_array($zz3A5)) { goto eundh; } goto HCkoS; OwabF: eundh: goto j5zUF; PWfoB: } public function js($vJmt0 = null) { return $this->assetsHandler("\x6a\163", $vJmt0); } public function css($QAmtq = null) { return $this->assetsHandler("\143\163\163", $QAmtq); } public function scripts($Q2lmv = null) { return $this->assetsHandler("\x73\143\162\151\160\164\163", $Q2lmv); } public function styles($dfBp1 = null) { return $this->assetsHandler("\x73\164\171\154\145\163", $dfBp1); } public function appendNav($dhLP1 = null) { goto HMQ62; HMQ62: if (!is_null($dhLP1)) { goto aeYWr; } goto fsQ2u; vYToH: $this->appendNav = $dhLP1; goto Ra9cs; fsQ2u: return $this->appendNav; goto cLW8y; cLW8y: aeYWr: goto vYToH; Ra9cs: return $this; goto WCYNz; WCYNz: } public function prependNav($bk6hO = null) { goto K1A3e; K1A3e: if (!is_null($bk6hO)) { goto Sq_IZ; } goto jPL9A; QFBcU: Sq_IZ: goto qC1pU; knwFK: return $this; goto cn05e; qC1pU: $this->prependNav = $bk6hO; goto knwFK; jPL9A: return $this->prependNav; goto QFBcU; cn05e: } }
