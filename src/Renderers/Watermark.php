<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\145", "\x63\165\163\164\x6f\155\55\167\x61\164\145\x72\155\x61\x72\x6b"); } public function body($msRQo = '') { return $this->set("\142\x6f\x64\x79", $msRQo); } public function className($msRQo = '') { return $this->set("\x63\154\141\x73\x73\116\141\x6d\145", $msRQo); } public function content($msRQo = '') { return $this->set("\x63\x6f\156\164\x65\156\164", $msRQo); } public function font($msRQo = '') { return $this->set("\146\157\156\x74", $msRQo); } public function gap($msRQo = '') { return $this->set("\147\x61\x70", $msRQo); } public function height($msRQo = '') { return $this->set("\150\145\151\147\150\164", $msRQo); } public function image($msRQo = '') { return $this->set("\151\x6d\x61\x67\145", $msRQo); } public function inherit($msRQo = true) { return $this->set("\151\x6e\150\145\162\151\164", $msRQo); } public function offset($msRQo = '') { return $this->set("\157\146\x66\x73\x65\164", $msRQo); } public function rotate($msRQo = '') { return $this->set("\162\x6f\x74\x61\x74\145", $msRQo); } public function type($msRQo = "\143\165\x73\164\x6f\155\x2d\x77\x61\x74\x65\162\x6d\141\162\153") { return $this->set("\164\x79\160\x65", $msRQo); } public function width($msRQo = '') { return $this->set("\x77\x69\x64\164\x68", $msRQo); } public function zIndex($msRQo = '') { return $this->set("\x7a\x49\x6e\x64\145\170", $msRQo); } }
