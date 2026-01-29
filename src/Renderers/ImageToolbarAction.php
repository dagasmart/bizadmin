<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ImageToolbarAction extends BaseRenderer { public function __construct() { $this->set("\153\145\x79", "\122\x4f\x54\101\x54\x45\137\x52\x49\x47\110\x54"); } public function confirmTitle($PfrF0 = '') { return $this->set("\x63\x6f\156\x66\151\162\x6d\x54\151\164\x6c\x65", $PfrF0); } public function disabled($PfrF0 = true) { return $this->set("\x64\151\x73\141\x62\x6c\145\144", $PfrF0); } public function icon($PfrF0 = '') { return $this->set("\x69\x63\157\156", $PfrF0); } public function iconClassName($PfrF0 = '') { return $this->set("\151\143\x6f\x6e\x43\154\141\x73\x73\116\141\x6d\145", $PfrF0); } public function key($PfrF0 = '') { return $this->set("\153\145\171", $PfrF0); } public function label($PfrF0 = '') { return $this->set("\154\141\x62\145\154", $PfrF0); } }
