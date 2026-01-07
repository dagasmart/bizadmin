<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Custom extends BaseRenderer { public function __construct() { $this->set("\164\x79\x70\x65", "\143\165\x73\x74\x6f\155"); } public function className($w0aoq = '') { return $this->set("\143\154\x61\x73\x73\116\141\x6d\x65", $w0aoq); } public function html($w0aoq = '') { return $this->set("\x68\x74\x6d\154", $w0aoq); } public function id($w0aoq = '') { return $this->set("\151\144", $w0aoq); } public function inline($w0aoq = true) { return $this->set("\x69\x6e\x6c\151\156\x65", $w0aoq); } public function name($w0aoq = '') { return $this->set("\156\141\x6d\145", $w0aoq); } public function onMount($w0aoq = '') { return $this->set("\x6f\156\115\157\x75\x6e\x74", $w0aoq); } public function onUnmount($w0aoq = '') { return $this->set("\x6f\156\x55\156\x6d\x6f\x75\x6e\x74", $w0aoq); } public function onUpdate($w0aoq = '') { return $this->set("\157\156\x55\x70\x64\141\x74\x65", $w0aoq); } public function type($w0aoq = "\x63\x75\x73\164\157\155") { return $this->set("\164\171\x70\x65", $w0aoq); } }
