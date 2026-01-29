<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ComboCondition extends BaseRenderer { public function __construct() { } public function items($PfrF0 = '') { return $this->set("\151\164\145\155\x73", $PfrF0); } public function label($PfrF0 = '') { return $this->set("\154\x61\x62\145\154", $PfrF0); } public function mode($PfrF0 = '') { return $this->set("\155\157\144\145", $PfrF0); } public function scaffold($PfrF0 = '') { return $this->set("\163\x63\141\x66\146\x6f\x6c\x64", $PfrF0); } public function test($PfrF0 = '') { return $this->set("\164\145\163\164", $PfrF0); } }
