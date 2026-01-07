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
 namespace DagaSmart\BizAdmin\Renderers; class Toast extends BaseRenderer { public function __construct() { } public function body($w0aoq = '') { return $this->set("\142\157\144\171", $w0aoq); } public function closeButton($w0aoq = true) { return $this->set("\x63\x6c\157\163\x65\102\165\x74\x74\157\x6e", $w0aoq); } public function items($w0aoq = '') { return $this->set("\x69\x74\x65\x6d\x73", $w0aoq); } public function level($w0aoq = '') { return $this->set("\x6c\x65\x76\145\x6c", $w0aoq); } public function position($w0aoq = '') { return $this->set("\160\x6f\163\151\164\x69\x6f\156", $w0aoq); } public function showIcon($w0aoq = true) { return $this->set("\x73\x68\157\167\111\x63\x6f\156", $w0aoq); } public function timeout($w0aoq = '') { return $this->set("\x74\151\x6d\145\x6f\x75\x74", $w0aoq); } public function title($w0aoq = '') { return $this->set("\164\151\164\154\x65", $w0aoq); } }
