<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:22              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Watermark extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\145", "\143\165\x73\x74\157\x6d\55\167\141\x74\145\x72\155\x61\x72\153"); } public function body($w0aoq = '') { return $this->set("\142\157\144\171", $w0aoq); } public function className($w0aoq = '') { return $this->set("\143\x6c\141\163\x73\116\x61\155\145", $w0aoq); } public function content($w0aoq = '') { return $this->set("\143\157\x6e\x74\x65\x6e\x74", $w0aoq); } public function font($w0aoq = '') { return $this->set("\146\157\x6e\164", $w0aoq); } public function gap($w0aoq = '') { return $this->set("\147\141\x70", $w0aoq); } public function height($w0aoq = '') { return $this->set("\x68\x65\151\x67\150\x74", $w0aoq); } public function image($w0aoq = '') { return $this->set("\151\x6d\141\x67\x65", $w0aoq); } public function inherit($w0aoq = true) { return $this->set("\151\156\x68\145\162\x69\x74", $w0aoq); } public function offset($w0aoq = '') { return $this->set("\x6f\x66\146\163\145\x74", $w0aoq); } public function rotate($w0aoq = '') { return $this->set("\162\x6f\164\x61\164\145", $w0aoq); } public function type($w0aoq = "\x63\165\163\x74\157\x6d\x2d\167\141\164\145\162\x6d\x61\x72\153") { return $this->set("\x74\x79\x70\145", $w0aoq); } public function width($w0aoq = '') { return $this->set("\x77\x69\144\x74\150", $w0aoq); } public function zIndex($w0aoq = '') { return $this->set("\x7a\111\156\x64\145\170", $w0aoq); } }
