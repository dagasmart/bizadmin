<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\164\x79\x70\145", "\x63\x75\x73\x74\157\155\55\x77\141\x74\145\x72\155\141\x72\153"); } public function body($PfrF0 = '') { return $this->set("\x62\x6f\144\171", $PfrF0); } public function className($PfrF0 = '') { return $this->set("\x63\154\x61\x73\163\116\141\x6d\x65", $PfrF0); } public function content($PfrF0 = '') { return $this->set("\x63\x6f\156\164\x65\156\164", $PfrF0); } public function font($PfrF0 = '') { return $this->set("\146\157\156\x74", $PfrF0); } public function gap($PfrF0 = '') { return $this->set("\147\141\x70", $PfrF0); } public function height($PfrF0 = '') { return $this->set("\x68\x65\151\x67\150\x74", $PfrF0); } public function image($PfrF0 = '') { return $this->set("\x69\155\141\x67\x65", $PfrF0); } public function inherit($PfrF0 = true) { return $this->set("\151\156\150\x65\162\151\x74", $PfrF0); } public function offset($PfrF0 = '') { return $this->set("\x6f\x66\146\163\x65\164", $PfrF0); } public function rotate($PfrF0 = '') { return $this->set("\162\x6f\x74\x61\164\145", $PfrF0); } public function type($PfrF0 = "\143\165\x73\x74\157\155\55\x77\141\164\x65\162\155\141\x72\153") { return $this->set("\164\171\160\x65", $PfrF0); } public function width($PfrF0 = '') { return $this->set("\x77\151\144\164\x68", $PfrF0); } public function zIndex($PfrF0 = '') { return $this->set("\172\111\x6e\144\145\170", $PfrF0); } }
