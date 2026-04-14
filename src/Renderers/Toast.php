<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Toast extends BaseRenderer { public function __construct() { } public function body($msRQo = '') { return $this->set("\142\x6f\x64\171", $msRQo); } public function closeButton($msRQo = true) { return $this->set("\x63\x6c\x6f\163\145\102\165\164\x74\157\156", $msRQo); } public function items($msRQo = '') { return $this->set("\151\x74\x65\x6d\x73", $msRQo); } public function level($msRQo = '') { return $this->set("\154\x65\166\x65\154", $msRQo); } public function position($msRQo = '') { return $this->set("\x70\157\x73\151\x74\151\157\156", $msRQo); } public function showIcon($msRQo = true) { return $this->set("\163\150\x6f\x77\x49\143\x6f\x6e", $msRQo); } public function timeout($msRQo = '') { return $this->set("\164\x69\x6d\145\157\165\x74", $msRQo); } public function title($msRQo = '') { return $this->set("\164\151\x74\x6c\x65", $msRQo); } }
