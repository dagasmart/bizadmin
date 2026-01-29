<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Badge extends BaseRenderer { public function __construct() { } public function animation($PfrF0 = true) { return $this->set("\x61\156\x69\x6d\x61\x74\x69\157\x6e", $PfrF0); } public function className($PfrF0 = '') { return $this->set("\x63\x6c\x61\x73\163\x4e\x61\155\145", $PfrF0); } public function level($PfrF0 = '') { return $this->set("\x6c\x65\x76\x65\x6c", $PfrF0); } public function mode($PfrF0 = '') { return $this->set("\155\x6f\x64\145", $PfrF0); } public function offset($PfrF0 = '') { return $this->set("\157\146\146\x73\x65\164", $PfrF0); } public function overflowCount($PfrF0 = '') { return $this->set("\x6f\166\x65\162\x66\x6c\x6f\167\103\157\165\156\164", $PfrF0); } public function position($PfrF0 = '') { return $this->set("\x70\157\x73\151\x74\x69\x6f\156", $PfrF0); } public function size($PfrF0 = '') { return $this->set("\163\151\172\x65", $PfrF0); } public function style($PfrF0 = '') { return $this->set("\163\x74\171\x6c\145", $PfrF0); } public function text($PfrF0 = '') { return $this->set("\164\x65\x78\164", $PfrF0); } public function visibleOn($PfrF0 = '') { return $this->set("\x76\x69\163\x69\142\x6c\145\117\156", $PfrF0); } }
