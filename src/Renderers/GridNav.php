<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class GridNav extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\x65", "\147\x72\x69\144\55\156\141\x76"); } public function border($nMamD = true) { return $this->set("\142\157\x72\144\x65\162", $nMamD); } public function center($nMamD = true) { return $this->set("\x63\x65\x6e\164\145\x72", $nMamD); } public function className($nMamD = '') { return $this->set("\x63\154\141\x73\x73\116\x61\155\x65", $nMamD); } public function columnNum($nMamD = '') { return $this->set("\x63\x6f\x6c\165\155\x6e\116\165\155", $nMamD); } public function direction($nMamD = '') { return $this->set("\144\151\x72\x65\143\164\151\157\x6e", $nMamD); } public function gutter($nMamD = '') { return $this->set("\x67\x75\x74\x74\x65\162", $nMamD); } public function iconRatio($nMamD = '') { return $this->set("\151\143\x6f\x6e\122\141\x74\x69\x6f", $nMamD); } public function itemClassName($nMamD = '') { return $this->set("\151\x74\x65\155\103\x6c\x61\x73\x73\116\141\155\x65", $nMamD); } public function options($nMamD = '') { return $this->set("\157\160\x74\151\157\156\x73", $nMamD); } public function reverse($nMamD = true) { return $this->set("\162\145\166\145\162\x73\x65", $nMamD); } public function source($nMamD = '') { return $this->set("\x73\x6f\165\162\143\145", $nMamD); } public function square($nMamD = true) { return $this->set("\163\161\x75\x61\x72\145", $nMamD); } public function type($nMamD = "\x67\x72\x69\144\55\156\x61\x76") { return $this->set("\x74\171\x70\x65", $nMamD); } public function value($nMamD = '') { return $this->set("\x76\x61\154\165\x65", $nMamD); } }
