<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:52              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\x65", "\x63\165\x73\x74\x6f\155\x2d\167\x61\x74\145\x72\155\x61\x72\153"); } public function body($OmZ0e = '') { return $this->set("\142\x6f\x64\171", $OmZ0e); } public function className($OmZ0e = '') { return $this->set("\143\154\141\163\163\116\x61\x6d\x65", $OmZ0e); } public function content($OmZ0e = '') { return $this->set("\x63\157\156\164\x65\x6e\x74", $OmZ0e); } public function font($OmZ0e = '') { return $this->set("\146\157\156\x74", $OmZ0e); } public function gap($OmZ0e = '') { return $this->set("\147\141\x70", $OmZ0e); } public function height($OmZ0e = '') { return $this->set("\x68\145\151\147\x68\x74", $OmZ0e); } public function image($OmZ0e = '') { return $this->set("\151\x6d\x61\x67\x65", $OmZ0e); } public function inherit($OmZ0e = true) { return $this->set("\151\156\x68\x65\x72\151\164", $OmZ0e); } public function offset($OmZ0e = '') { return $this->set("\157\146\146\163\x65\164", $OmZ0e); } public function rotate($OmZ0e = '') { return $this->set("\x72\x6f\164\141\164\145", $OmZ0e); } public function type($OmZ0e = "\x63\x75\163\164\157\155\55\167\141\x74\x65\162\x6d\x61\x72\153") { return $this->set("\x74\x79\160\x65", $OmZ0e); } public function width($OmZ0e = '') { return $this->set("\x77\x69\x64\164\x68", $OmZ0e); } public function zIndex($OmZ0e = '') { return $this->set("\x7a\111\x6e\x64\145\170", $OmZ0e); } }
