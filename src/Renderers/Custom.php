<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Custom extends BaseRenderer { public function __construct() { $this->set("\x74\171\x70\x65", "\x63\x75\x73\x74\x6f\x6d"); } public function className($PfrF0 = '') { return $this->set("\x63\154\141\x73\163\x4e\141\x6d\145", $PfrF0); } public function html($PfrF0 = '') { return $this->set("\150\164\155\154", $PfrF0); } public function id($PfrF0 = '') { return $this->set("\x69\144", $PfrF0); } public function inline($PfrF0 = true) { return $this->set("\x69\x6e\154\x69\156\145", $PfrF0); } public function name($PfrF0 = '') { return $this->set("\156\x61\155\x65", $PfrF0); } public function onMount($PfrF0 = '') { return $this->set("\x6f\156\115\157\165\156\x74", $PfrF0); } public function onUnmount($PfrF0 = '') { return $this->set("\x6f\x6e\x55\156\x6d\157\165\156\x74", $PfrF0); } public function onUpdate($PfrF0 = '') { return $this->set("\157\156\x55\160\x64\141\164\145", $PfrF0); } public function type($PfrF0 = "\143\165\x73\164\157\x6d") { return $this->set("\164\171\160\x65", $PfrF0); } }
