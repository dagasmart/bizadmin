<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:43              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\x65", "\x63\165\x73\x74\157\x6d\x2d\167\x61\164\x65\162\x6d\141\162\153"); } public function body($AHvXX = '') { return $this->set("\x62\x6f\x64\171", $AHvXX); } public function className($AHvXX = '') { return $this->set("\143\x6c\x61\163\163\x4e\x61\155\x65", $AHvXX); } public function content($AHvXX = '') { return $this->set("\143\x6f\156\164\x65\156\164", $AHvXX); } public function font($AHvXX = '') { return $this->set("\146\157\x6e\164", $AHvXX); } public function gap($AHvXX = '') { return $this->set("\147\141\x70", $AHvXX); } public function height($AHvXX = '') { return $this->set("\x68\x65\151\147\150\164", $AHvXX); } public function image($AHvXX = '') { return $this->set("\x69\155\141\147\x65", $AHvXX); } public function inherit($AHvXX = true) { return $this->set("\151\156\150\145\162\x69\164", $AHvXX); } public function offset($AHvXX = '') { return $this->set("\157\x66\x66\x73\145\x74", $AHvXX); } public function rotate($AHvXX = '') { return $this->set("\x72\157\x74\141\x74\x65", $AHvXX); } public function type($AHvXX = "\x63\165\163\164\x6f\x6d\55\167\x61\164\x65\162\x6d\141\162\x6b") { return $this->set("\164\x79\x70\145", $AHvXX); } public function width($AHvXX = '') { return $this->set("\167\151\x64\x74\150", $AHvXX); } public function zIndex($AHvXX = '') { return $this->set("\172\x49\x6e\144\145\x78", $AHvXX); } }
