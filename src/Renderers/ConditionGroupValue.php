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
 namespace DagaSmart\BizAdmin\Renderers; class ConditionGroupValue extends BaseRenderer { public function __construct() { $this->set("\x63\157\x6e\x6a\x75\156\x63\x74\151\157\x6e", "\x61\156\144"); } public function children($w0aoq = '') { return $this->set("\x63\150\x69\x6c\144\162\x65\156", $w0aoq); } public function conjunction($w0aoq = '') { return $this->set("\143\x6f\x6e\x6a\x75\x6e\x63\x74\x69\x6f\x6e", $w0aoq); } public function id($w0aoq = '') { return $this->set("\x69\x64", $w0aoq); } public function if($w0aoq = '') { return $this->set("\x69\x66", $w0aoq); } public function not($w0aoq = true) { return $this->set("\156\157\x74", $w0aoq); } }
