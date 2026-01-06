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
 namespace DagaSmart\BizAdmin\Renderers; class Toast extends BaseRenderer { public function __construct() { } public function body($AHvXX = '') { return $this->set("\142\157\144\x79", $AHvXX); } public function closeButton($AHvXX = true) { return $this->set("\143\154\x6f\x73\145\102\x75\x74\164\x6f\156", $AHvXX); } public function items($AHvXX = '') { return $this->set("\x69\x74\145\155\163", $AHvXX); } public function level($AHvXX = '') { return $this->set("\x6c\x65\166\x65\x6c", $AHvXX); } public function position($AHvXX = '') { return $this->set("\x70\157\x73\151\x74\151\x6f\x6e", $AHvXX); } public function showIcon($AHvXX = true) { return $this->set("\163\150\157\x77\x49\143\157\156", $AHvXX); } public function timeout($AHvXX = '') { return $this->set("\164\151\x6d\145\x6f\165\164", $AHvXX); } public function title($AHvXX = '') { return $this->set("\x74\x69\164\154\145", $AHvXX); } }
