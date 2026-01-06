<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\x74\171\160\x65", "\x63\x75\x73\164\157\155\x2d\167\141\164\145\x72\x6d\x61\162\153"); } public function body($nMamD = '') { return $this->set("\x62\x6f\144\171", $nMamD); } public function className($nMamD = '') { return $this->set("\143\x6c\x61\x73\163\116\141\155\x65", $nMamD); } public function content($nMamD = '') { return $this->set("\143\157\x6e\x74\145\156\x74", $nMamD); } public function font($nMamD = '') { return $this->set("\146\157\156\x74", $nMamD); } public function gap($nMamD = '') { return $this->set("\x67\x61\160", $nMamD); } public function height($nMamD = '') { return $this->set("\x68\145\151\x67\150\164", $nMamD); } public function image($nMamD = '') { return $this->set("\151\x6d\141\147\145", $nMamD); } public function inherit($nMamD = true) { return $this->set("\x69\156\x68\x65\162\151\x74", $nMamD); } public function offset($nMamD = '') { return $this->set("\x6f\x66\x66\x73\145\x74", $nMamD); } public function rotate($nMamD = '') { return $this->set("\x72\x6f\x74\141\164\145", $nMamD); } public function type($nMamD = "\x63\x75\x73\x74\157\x6d\x2d\167\x61\164\x65\162\155\x61\x72\153") { return $this->set("\164\171\x70\x65", $nMamD); } public function width($nMamD = '') { return $this->set("\x77\151\x64\164\x68", $nMamD); } public function zIndex($nMamD = '') { return $this->set("\172\111\x6e\x64\145\170", $nMamD); } }
