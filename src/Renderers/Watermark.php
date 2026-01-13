<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\x74\171\x70\x65", "\x63\165\x73\164\157\155\x2d\x77\141\x74\x65\x72\x6d\x61\162\x6b"); } public function body($JqsAq = '') { return $this->set("\x62\x6f\144\171", $JqsAq); } public function className($JqsAq = '') { return $this->set("\143\154\141\x73\163\x4e\141\x6d\145", $JqsAq); } public function content($JqsAq = '') { return $this->set("\143\x6f\x6e\164\145\x6e\164", $JqsAq); } public function font($JqsAq = '') { return $this->set("\146\x6f\156\x74", $JqsAq); } public function gap($JqsAq = '') { return $this->set("\147\141\x70", $JqsAq); } public function height($JqsAq = '') { return $this->set("\x68\145\151\x67\150\164", $JqsAq); } public function image($JqsAq = '') { return $this->set("\x69\155\x61\x67\145", $JqsAq); } public function inherit($JqsAq = true) { return $this->set("\151\x6e\150\x65\162\151\x74", $JqsAq); } public function offset($JqsAq = '') { return $this->set("\x6f\x66\x66\x73\145\164", $JqsAq); } public function rotate($JqsAq = '') { return $this->set("\162\x6f\164\141\164\145", $JqsAq); } public function type($JqsAq = "\x63\x75\x73\x74\x6f\x6d\x2d\x77\x61\x74\145\162\155\x61\162\x6b") { return $this->set("\x74\x79\x70\145", $JqsAq); } public function width($JqsAq = '') { return $this->set("\167\151\x64\x74\150", $JqsAq); } public function zIndex($JqsAq = '') { return $this->set("\172\x49\x6e\144\145\170", $JqsAq); } }
