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
 namespace DagaSmart\BizAdmin\Support\Cores; class Asset { protected array $js = []; protected array $css = []; protected array $scripts = []; protected array $styles = []; protected $appendNav; protected $prependNav; private function assetsHandler($mzKWu, $VkvRA) { goto t_VRI; DnsGV: return $this; goto fbjaq; XZe9n: BexBw: goto G7Fva; EIpk9: FV2Gl: goto DnsGV; G7Fva: if (is_array($VkvRA)) { goto h84no; } goto yqjNe; CwUBh: return $this->{$mzKWu}; goto XZe9n; yqjNe: $this->{$mzKWu}[] = $VkvRA; goto zL73a; BWiD2: $this->{$mzKWu} = array_merge($this->{$mzKWu}, $VkvRA); goto EIpk9; GEwHi: h84no: goto BWiD2; zL73a: goto FV2Gl; goto GEwHi; t_VRI: if (!is_null($VkvRA)) { goto BexBw; } goto CwUBh; fbjaq: } public function js($NmLSu = null) { return $this->assetsHandler("\x6a\163", $NmLSu); } public function css($CA_cU = null) { return $this->assetsHandler("\143\x73\x73", $CA_cU); } public function scripts($ud0q0 = null) { return $this->assetsHandler("\x73\143\x72\x69\x70\x74\163", $ud0q0); } public function styles($scxjy = null) { return $this->assetsHandler("\163\164\171\154\145\163", $scxjy); } public function appendNav($Q2Mmj = null) { goto f3E8m; AHq7G: zy91t: goto yjNV2; f3E8m: if (!is_null($Q2Mmj)) { goto zy91t; } goto DUPSD; yjNV2: $this->appendNav = $Q2Mmj; goto hubib; DUPSD: return $this->appendNav; goto AHq7G; hubib: return $this; goto f8n9Y; f8n9Y: } public function prependNav($s4YUJ = null) { goto E5xbR; PcPCd: xEvQW: goto f98BM; hvZAo: return $this; goto db7mc; E5xbR: if (!is_null($s4YUJ)) { goto xEvQW; } goto cxuys; f98BM: $this->prependNav = $s4YUJ; goto hvZAo; cxuys: return $this->prependNav; goto PcPCd; db7mc: } }
