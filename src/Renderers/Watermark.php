<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\164\171\160\145", "\x63\x75\163\x74\157\155\x2d\x77\x61\164\x65\162\x6d\x61\162\x6b"); } public function body($NXsnd = '') { return $this->set("\142\157\x64\x79", $NXsnd); } public function className($NXsnd = '') { return $this->set("\143\x6c\141\163\x73\116\141\155\x65", $NXsnd); } public function content($NXsnd = '') { return $this->set("\143\157\x6e\164\x65\x6e\164", $NXsnd); } public function font($NXsnd = '') { return $this->set("\146\x6f\x6e\164", $NXsnd); } public function gap($NXsnd = '') { return $this->set("\147\141\160", $NXsnd); } public function height($NXsnd = '') { return $this->set("\150\145\151\x67\150\164", $NXsnd); } public function image($NXsnd = '') { return $this->set("\151\x6d\141\x67\145", $NXsnd); } public function inherit($NXsnd = true) { return $this->set("\x69\156\x68\x65\162\x69\x74", $NXsnd); } public function offset($NXsnd = '') { return $this->set("\157\146\x66\x73\145\164", $NXsnd); } public function rotate($NXsnd = '') { return $this->set("\x72\x6f\164\x61\164\x65", $NXsnd); } public function type($NXsnd = "\x63\165\x73\x74\x6f\155\x2d\167\141\164\145\x72\155\141\x72\x6b") { return $this->set("\x74\x79\160\145", $NXsnd); } public function width($NXsnd = '') { return $this->set("\167\x69\144\x74\150", $NXsnd); } public function zIndex($NXsnd = '') { return $this->set("\172\111\x6e\144\145\170", $NXsnd); } }
