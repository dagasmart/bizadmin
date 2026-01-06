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
 namespace DagaSmart\BizAdmin\Renderers; class ConditionGroupValue extends BaseRenderer { public function __construct() { $this->set("\x63\157\156\152\x75\x6e\x63\x74\151\x6f\x6e", "\x61\156\144"); } public function children($AHvXX = '') { return $this->set("\143\150\x69\154\144\x72\145\156", $AHvXX); } public function conjunction($AHvXX = '') { return $this->set("\143\x6f\156\x6a\165\156\143\164\x69\157\x6e", $AHvXX); } public function id($AHvXX = '') { return $this->set("\x69\x64", $AHvXX); } public function if($AHvXX = '') { return $this->set("\151\146", $AHvXX); } public function not($AHvXX = true) { return $this->set("\x6e\x6f\x74", $AHvXX); } }
