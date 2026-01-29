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
 namespace DagaSmart\BizAdmin\Renderers; class ConditionGroupValue extends BaseRenderer { public function __construct() { $this->set("\143\157\x6e\152\165\156\143\164\151\x6f\156", "\141\156\144"); } public function children($PfrF0 = '') { return $this->set("\143\x68\151\154\144\162\145\156", $PfrF0); } public function conjunction($PfrF0 = '') { return $this->set("\143\157\156\x6a\165\x6e\143\x74\151\x6f\156", $PfrF0); } public function id($PfrF0 = '') { return $this->set("\x69\x64", $PfrF0); } public function if($PfrF0 = '') { return $this->set("\x69\x66", $PfrF0); } public function not($PfrF0 = true) { return $this->set("\x6e\157\164", $PfrF0); } }
