<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:06              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\x65", "\x63\x75\163\164\157\x6d\55\x77\x61\x74\x65\162\x6d\x61\x72\x6b"); } public function body($gp6i6 = '') { return $this->set("\x62\x6f\x64\x79", $gp6i6); } public function className($gp6i6 = '') { return $this->set("\143\154\141\163\x73\x4e\141\155\145", $gp6i6); } public function content($gp6i6 = '') { return $this->set("\143\x6f\x6e\164\145\x6e\x74", $gp6i6); } public function font($gp6i6 = '') { return $this->set("\146\157\156\x74", $gp6i6); } public function gap($gp6i6 = '') { return $this->set("\147\141\x70", $gp6i6); } public function height($gp6i6 = '') { return $this->set("\150\145\x69\147\150\x74", $gp6i6); } public function image($gp6i6 = '') { return $this->set("\x69\155\x61\147\145", $gp6i6); } public function inherit($gp6i6 = true) { return $this->set("\151\156\150\x65\162\151\164", $gp6i6); } public function offset($gp6i6 = '') { return $this->set("\x6f\x66\146\x73\145\x74", $gp6i6); } public function rotate($gp6i6 = '') { return $this->set("\162\x6f\164\141\164\x65", $gp6i6); } public function type($gp6i6 = "\143\x75\x73\x74\157\155\x2d\x77\141\164\x65\162\x6d\141\x72\x6b") { return $this->set("\x74\x79\160\x65", $gp6i6); } public function width($gp6i6 = '') { return $this->set("\167\x69\144\x74\x68", $gp6i6); } public function zIndex($gp6i6 = '') { return $this->set("\x7a\x49\x6e\x64\145\x78", $gp6i6); } }
