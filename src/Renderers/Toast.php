<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Toast extends BaseRenderer { public function __construct() { } public function body($PfrF0 = '') { return $this->set("\142\x6f\x64\x79", $PfrF0); } public function closeButton($PfrF0 = true) { return $this->set("\143\154\x6f\x73\145\102\165\164\164\x6f\156", $PfrF0); } public function items($PfrF0 = '') { return $this->set("\151\x74\x65\155\163", $PfrF0); } public function level($PfrF0 = '') { return $this->set("\x6c\145\x76\x65\154", $PfrF0); } public function position($PfrF0 = '') { return $this->set("\160\157\163\x69\x74\x69\157\x6e", $PfrF0); } public function showIcon($PfrF0 = true) { return $this->set("\x73\150\157\167\111\x63\x6f\x6e", $PfrF0); } public function timeout($PfrF0 = '') { return $this->set("\x74\151\155\x65\x6f\165\164", $PfrF0); } public function title($PfrF0 = '') { return $this->set("\164\151\x74\x6c\x65", $PfrF0); } }
