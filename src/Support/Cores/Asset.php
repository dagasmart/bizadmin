<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; class Asset { protected array $js = []; protected array $css = []; protected array $scripts = []; protected array $styles = []; protected $appendNav; protected $prependNav; private function assetsHandler($UInRk, $lB1eq) { goto sME47; d23kE: MzxJN: goto Pz01q; Pz01q: $this->{$UInRk} = array_merge($this->{$UInRk}, $lB1eq); goto qOO3w; K88lI: if (is_array($lB1eq)) { goto MzxJN; } goto NOGqs; NOGqs: $this->{$UInRk}[] = $lB1eq; goto BdN2b; qOO3w: yuJ8t: goto oQSU4; hLide: vxwSn: goto K88lI; oQSU4: return $this; goto LdxdK; sME47: if (!is_null($lB1eq)) { goto vxwSn; } goto F_OGK; F_OGK: return $this->{$UInRk}; goto hLide; BdN2b: goto yuJ8t; goto d23kE; LdxdK: } public function js($KlqV4 = null) { return $this->assetsHandler("\x6a\163", $KlqV4); } public function css($fuJfl = null) { return $this->assetsHandler("\143\163\163", $fuJfl); } public function scripts($c50PM = null) { return $this->assetsHandler("\163\x63\x72\151\160\x74\163", $c50PM); } public function styles($ryjpp = null) { return $this->assetsHandler("\x73\x74\171\154\x65\x73", $ryjpp); } public function appendNav($gsioJ = null) { goto IDlJI; Ev9HI: $this->appendNav = $gsioJ; goto CYGQX; rGPmM: zC_uI: goto Ev9HI; CYGQX: return $this; goto LrL6c; tvKtv: return $this->appendNav; goto rGPmM; IDlJI: if (!is_null($gsioJ)) { goto zC_uI; } goto tvKtv; LrL6c: } public function prependNav($avZCo = null) { goto yHh7p; s2iJ9: $this->prependNav = $avZCo; goto n6x_g; YnyiP: return $this->prependNav; goto bLgWj; yHh7p: if (!is_null($avZCo)) { goto qW8KI; } goto YnyiP; bLgWj: qW8KI: goto s2iJ9; n6x_g: return $this; goto OC5OH; OC5OH: } }
