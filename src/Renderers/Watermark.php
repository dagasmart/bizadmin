<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\164\x79\160\x65", "\x63\x75\x73\x74\157\155\55\x77\x61\164\x65\x72\x6d\141\x72\x6b"); } public function body($wMm3m = '') { return $this->set("\142\157\144\171", $wMm3m); } public function className($wMm3m = '') { return $this->set("\143\154\141\x73\x73\x4e\x61\x6d\145", $wMm3m); } public function content($wMm3m = '') { return $this->set("\143\x6f\x6e\x74\x65\156\x74", $wMm3m); } public function font($wMm3m = '') { return $this->set("\x66\157\x6e\164", $wMm3m); } public function gap($wMm3m = '') { return $this->set("\147\x61\x70", $wMm3m); } public function height($wMm3m = '') { return $this->set("\x68\x65\151\x67\x68\164", $wMm3m); } public function image($wMm3m = '') { return $this->set("\151\x6d\x61\x67\145", $wMm3m); } public function inherit($wMm3m = true) { return $this->set("\151\x6e\150\145\x72\151\164", $wMm3m); } public function offset($wMm3m = '') { return $this->set("\157\146\146\x73\x65\x74", $wMm3m); } public function rotate($wMm3m = '') { return $this->set("\162\x6f\164\x61\164\x65", $wMm3m); } public function type($wMm3m = "\x63\x75\163\x74\x6f\x6d\55\x77\x61\x74\145\162\155\141\162\153") { return $this->set("\164\x79\x70\145", $wMm3m); } public function width($wMm3m = '') { return $this->set("\167\151\x64\x74\x68", $wMm3m); } public function zIndex($wMm3m = '') { return $this->set("\x7a\111\156\144\145\170", $wMm3m); } }
