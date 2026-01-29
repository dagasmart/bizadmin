<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class GridNav extends BaseRenderer { public function __construct() { $this->set("\164\x79\160\x65", "\x67\162\x69\x64\x2d\156\141\x76"); } public function border($PfrF0 = true) { return $this->set("\x62\x6f\162\144\x65\x72", $PfrF0); } public function center($PfrF0 = true) { return $this->set("\143\x65\x6e\x74\145\162", $PfrF0); } public function className($PfrF0 = '') { return $this->set("\143\x6c\141\163\x73\x4e\141\x6d\x65", $PfrF0); } public function columnNum($PfrF0 = '') { return $this->set("\143\157\x6c\x75\155\156\116\x75\x6d", $PfrF0); } public function direction($PfrF0 = '') { return $this->set("\x64\x69\162\145\x63\164\151\x6f\x6e", $PfrF0); } public function gutter($PfrF0 = '') { return $this->set("\x67\x75\164\164\145\x72", $PfrF0); } public function iconRatio($PfrF0 = '') { return $this->set("\151\143\157\x6e\122\x61\164\x69\157", $PfrF0); } public function itemClassName($PfrF0 = '') { return $this->set("\x69\x74\x65\155\x43\154\x61\163\x73\x4e\141\x6d\x65", $PfrF0); } public function options($PfrF0 = '') { return $this->set("\x6f\x70\x74\x69\157\x6e\x73", $PfrF0); } public function reverse($PfrF0 = true) { return $this->set("\x72\x65\166\145\162\x73\145", $PfrF0); } public function source($PfrF0 = '') { return $this->set("\x73\x6f\165\162\143\145", $PfrF0); } public function square($PfrF0 = true) { return $this->set("\x73\161\165\141\162\145", $PfrF0); } public function type($PfrF0 = "\147\x72\151\x64\x2d\156\x61\x76") { return $this->set("\164\171\160\x65", $PfrF0); } public function value($PfrF0 = '') { return $this->set("\166\141\x6c\165\x65", $PfrF0); } }
