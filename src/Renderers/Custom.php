<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Custom extends BaseRenderer { public function __construct() { $this->set("\x74\171\x70\145", "\x63\165\x73\164\x6f\155"); } public function className($AHvXX = '') { return $this->set("\143\x6c\141\x73\x73\x4e\141\155\145", $AHvXX); } public function html($AHvXX = '') { return $this->set("\x68\164\155\154", $AHvXX); } public function id($AHvXX = '') { return $this->set("\151\x64", $AHvXX); } public function inline($AHvXX = true) { return $this->set("\x69\x6e\x6c\151\x6e\145", $AHvXX); } public function name($AHvXX = '') { return $this->set("\156\141\155\145", $AHvXX); } public function onMount($AHvXX = '') { return $this->set("\157\156\115\x6f\x75\156\x74", $AHvXX); } public function onUnmount($AHvXX = '') { return $this->set("\157\x6e\125\156\155\157\x75\156\x74", $AHvXX); } public function onUpdate($AHvXX = '') { return $this->set("\157\x6e\125\x70\x64\x61\164\x65", $AHvXX); } public function type($AHvXX = "\143\x75\x73\164\157\155") { return $this->set("\164\171\160\x65", $AHvXX); } }
