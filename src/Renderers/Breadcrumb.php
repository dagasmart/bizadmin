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
 namespace DagaSmart\BizAdmin\Renderers; class Breadcrumb extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\145", "\142\x72\145\x61\x64\x63\x72\165\x6d\142"); } public function className($PfrF0 = '') { return $this->set("\143\154\x61\x73\x73\x4e\x61\155\145", $PfrF0); } public function dropdownClassName($PfrF0 = '') { return $this->set("\x64\x72\x6f\160\x64\x6f\x77\156\x43\154\x61\163\163\x4e\141\x6d\145", $PfrF0); } public function dropdownItemClassName($PfrF0 = '') { return $this->set("\144\162\x6f\160\x64\157\167\156\x49\x74\145\x6d\x43\154\x61\163\x73\116\141\155\x65", $PfrF0); } public function itemClassName($PfrF0 = '') { return $this->set("\151\x74\x65\x6d\103\154\141\163\x73\116\x61\x6d\x65", $PfrF0); } public function items($PfrF0 = '') { return $this->set("\151\164\145\x6d\x73", $PfrF0); } public function labelMaxLength($PfrF0 = '') { return $this->set("\154\x61\x62\145\x6c\x4d\141\170\114\145\x6e\x67\164\150", $PfrF0); } public function separator($PfrF0 = '') { return $this->set("\163\x65\160\141\x72\141\x74\157\162", $PfrF0); } public function separatorClassName($PfrF0 = '') { return $this->set("\163\145\x70\x61\162\x61\164\x6f\162\x43\x6c\x61\163\163\x4e\x61\x6d\x65", $PfrF0); } public function source($PfrF0 = '') { return $this->set("\x73\x6f\x75\x72\143\x65", $PfrF0); } public function tooltipPosition($PfrF0 = '') { return $this->set("\x74\x6f\157\154\164\x69\160\120\157\x73\x69\164\151\157\156", $PfrF0); } public function type($PfrF0 = "\x62\x72\x65\141\144\x63\162\165\155\142") { return $this->set("\164\171\160\x65", $PfrF0); } }
