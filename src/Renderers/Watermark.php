<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\x74\171\160\145", "\143\165\x73\164\x6f\155\x2d\167\141\164\x65\162\155\x61\162\x6b"); } public function body($HXweU = '') { return $this->set("\142\157\144\171", $HXweU); } public function className($HXweU = '') { return $this->set("\143\x6c\x61\x73\x73\x4e\141\x6d\145", $HXweU); } public function content($HXweU = '') { return $this->set("\x63\x6f\156\x74\145\x6e\164", $HXweU); } public function font($HXweU = '') { return $this->set("\146\157\156\x74", $HXweU); } public function gap($HXweU = '') { return $this->set("\x67\141\160", $HXweU); } public function height($HXweU = '') { return $this->set("\x68\x65\151\147\x68\x74", $HXweU); } public function image($HXweU = '') { return $this->set("\x69\x6d\141\x67\x65", $HXweU); } public function inherit($HXweU = true) { return $this->set("\151\x6e\150\145\x72\151\164", $HXweU); } public function offset($HXweU = '') { return $this->set("\157\x66\x66\163\145\164", $HXweU); } public function rotate($HXweU = '') { return $this->set("\x72\157\164\x61\164\x65", $HXweU); } public function type($HXweU = "\x63\165\x73\164\157\x6d\55\167\141\164\x65\162\x6d\141\x72\x6b") { return $this->set("\x74\x79\160\x65", $HXweU); } public function width($HXweU = '') { return $this->set("\167\151\x64\164\150", $HXweU); } public function zIndex($HXweU = '') { return $this->set("\172\x49\156\x64\x65\x78", $HXweU); } }
