<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:24              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\164\x79\x70\x65", "\x63\x75\163\x74\x6f\155\x2d\167\x61\164\x65\162\x6d\x61\x72\x6b"); } public function body($msRQo = '') { return $this->set("\x62\157\144\171", $msRQo); } public function className($msRQo = '') { return $this->set("\x63\x6c\141\163\163\116\141\155\145", $msRQo); } public function content($msRQo = '') { return $this->set("\x63\x6f\156\164\145\x6e\x74", $msRQo); } public function font($msRQo = '') { return $this->set("\146\x6f\x6e\x74", $msRQo); } public function gap($msRQo = '') { return $this->set("\x67\x61\160", $msRQo); } public function height($msRQo = '') { return $this->set("\x68\145\x69\x67\150\164", $msRQo); } public function image($msRQo = '') { return $this->set("\x69\x6d\x61\x67\145", $msRQo); } public function inherit($msRQo = true) { return $this->set("\x69\x6e\x68\x65\x72\x69\164", $msRQo); } public function offset($msRQo = '') { return $this->set("\157\146\x66\163\x65\164", $msRQo); } public function rotate($msRQo = '') { return $this->set("\162\157\164\141\x74\x65", $msRQo); } public function type($msRQo = "\143\165\x73\164\x6f\155\x2d\x77\141\x74\x65\x72\155\141\x72\153") { return $this->set("\x74\171\160\145", $msRQo); } public function width($msRQo = '') { return $this->set("\167\151\x64\164\150", $msRQo); } public function zIndex($msRQo = '') { return $this->set("\172\111\x6e\x64\x65\x78", $msRQo); } }
