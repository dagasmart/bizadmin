<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:00              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\164\171\160\x65", "\143\165\x73\x74\x6f\155\55\167\x61\164\x65\x72\x6d\141\162\153"); } public function body($PBVs1 = '') { return $this->set("\142\157\x64\171", $PBVs1); } public function className($PBVs1 = '') { return $this->set("\143\x6c\x61\x73\x73\x4e\141\x6d\145", $PBVs1); } public function content($PBVs1 = '') { return $this->set("\143\x6f\x6e\164\x65\x6e\164", $PBVs1); } public function font($PBVs1 = '') { return $this->set("\x66\157\156\x74", $PBVs1); } public function gap($PBVs1 = '') { return $this->set("\x67\141\x70", $PBVs1); } public function height($PBVs1 = '') { return $this->set("\x68\x65\151\x67\150\x74", $PBVs1); } public function image($PBVs1 = '') { return $this->set("\151\155\141\x67\145", $PBVs1); } public function inherit($PBVs1 = true) { return $this->set("\151\156\x68\x65\162\x69\x74", $PBVs1); } public function offset($PBVs1 = '') { return $this->set("\x6f\146\x66\x73\145\164", $PBVs1); } public function rotate($PBVs1 = '') { return $this->set("\162\x6f\x74\x61\x74\x65", $PBVs1); } public function type($PBVs1 = "\x63\x75\163\x74\x6f\155\55\167\141\164\x65\162\x6d\141\162\x6b") { return $this->set("\164\171\160\x65", $PBVs1); } public function width($PBVs1 = '') { return $this->set("\167\151\144\x74\x68", $PBVs1); } public function zIndex($PBVs1 = '') { return $this->set("\172\111\156\144\x65\170", $PBVs1); } }
