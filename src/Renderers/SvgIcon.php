<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class SvgIcon extends BaseRenderer { public function __construct() { $this->set("\x74\171\160\145", "\143\165\x73\x74\x6f\155\x2d\163\x76\147\55\151\143\157\156"); } public function className($Hfwzl = '') { return $this->set("\x63\x6c\141\x73\x73\x4e\x61\x6d\x65", $Hfwzl); } public function icon($Hfwzl = '') { return $this->set("\x69\143\x6f\156", $Hfwzl); } public function type($Hfwzl = "\143\165\163\164\x6f\x6d\x2d\x73\x76\147\x2d\x69\x63\x6f\x6e") { return $this->set("\164\171\x70\145", $Hfwzl); } }
