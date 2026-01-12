<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:59              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class SvgIcon extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\145", "\x63\165\x73\x74\157\x6d\55\x73\166\x67\x2d\151\143\x6f\x6e"); } public function className($PBVs1 = '') { return $this->set("\x63\x6c\141\x73\x73\116\x61\x6d\145", $PBVs1); } public function icon($PBVs1 = '') { return $this->set("\151\143\x6f\156", $PBVs1); } public function type($PBVs1 = "\x63\x75\x73\164\x6f\155\x2d\163\x76\x67\55\151\x63\157\156") { return $this->set("\x74\171\160\145", $PBVs1); } }
