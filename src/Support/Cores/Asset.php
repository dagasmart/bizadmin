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
 namespace DagaSmart\BizAdmin\Support\Cores; class Asset { protected array $js = []; protected array $css = []; protected array $scripts = []; protected array $styles = []; protected $appendNav; protected $prependNav; private function assetsHandler($Inld9, $QaPI0) { goto Fnuj3; Fnuj3: if (!is_null($QaPI0)) { goto a3FFq; } goto fEOv0; zLq6F: a3FFq: goto yigeW; grWM1: goto Zrj8t; goto hPOli; qjXCk: return $this; goto igDfv; yigeW: if (is_array($QaPI0)) { goto kuFBy; } goto OiPWe; fEOv0: return $this->{$Inld9}; goto zLq6F; VZ3Sz: $this->{$Inld9} = array_merge($this->{$Inld9}, $QaPI0); goto nWDwU; hPOli: kuFBy: goto VZ3Sz; OiPWe: $this->{$Inld9}[] = $QaPI0; goto grWM1; nWDwU: Zrj8t: goto qjXCk; igDfv: } public function js($EfSl1 = null) { return $this->assetsHandler("\x6a\x73", $EfSl1); } public function css($C_HJ0 = null) { return $this->assetsHandler("\x63\163\163", $C_HJ0); } public function scripts($sEU1_ = null) { return $this->assetsHandler("\163\x63\162\x69\160\164\163", $sEU1_); } public function styles($dILf9 = null) { return $this->assetsHandler("\x73\164\171\x6c\x65\x73", $dILf9); } public function appendNav($jZz_V = null) { goto rI4Fs; rI4Fs: if (!is_null($jZz_V)) { goto uD8P4; } goto kgeKW; CqFiK: $this->appendNav = $jZz_V; goto Kpafr; pkXFZ: uD8P4: goto CqFiK; kgeKW: return $this->appendNav; goto pkXFZ; Kpafr: return $this; goto Oo5iK; Oo5iK: } public function prependNav($fo5cp = null) { goto McmF7; tqVwu: ddB0j: goto a1tVP; McmF7: if (!is_null($fo5cp)) { goto ddB0j; } goto M3KUO; M3KUO: return $this->prependNav; goto tqVwu; a1tVP: $this->prependNav = $fo5cp; goto RwnXq; RwnXq: return $this; goto ImHVV; ImHVV: } }
