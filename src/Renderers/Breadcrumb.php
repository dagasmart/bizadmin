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
 namespace DagaSmart\BizAdmin\Renderers; class Breadcrumb extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\145", "\x62\162\x65\141\x64\143\162\165\x6d\142"); } public function className($AHvXX = '') { return $this->set("\143\x6c\x61\x73\163\x4e\x61\155\x65", $AHvXX); } public function dropdownClassName($AHvXX = '') { return $this->set("\x64\162\157\160\144\157\167\x6e\103\154\141\163\163\116\x61\x6d\x65", $AHvXX); } public function dropdownItemClassName($AHvXX = '') { return $this->set("\144\162\x6f\160\x64\x6f\x77\x6e\x49\x74\145\x6d\x43\x6c\141\x73\x73\116\x61\x6d\x65", $AHvXX); } public function itemClassName($AHvXX = '') { return $this->set("\151\164\x65\155\103\154\141\163\163\x4e\141\x6d\x65", $AHvXX); } public function items($AHvXX = '') { return $this->set("\151\164\145\x6d\x73", $AHvXX); } public function labelMaxLength($AHvXX = '') { return $this->set("\x6c\x61\x62\x65\x6c\x4d\x61\170\x4c\145\156\147\x74\x68", $AHvXX); } public function separator($AHvXX = '') { return $this->set("\x73\145\160\x61\x72\141\x74\x6f\162", $AHvXX); } public function separatorClassName($AHvXX = '') { return $this->set("\163\x65\x70\141\162\x61\164\157\x72\103\x6c\141\163\x73\116\x61\155\145", $AHvXX); } public function source($AHvXX = '') { return $this->set("\163\157\165\x72\143\x65", $AHvXX); } public function tooltipPosition($AHvXX = '') { return $this->set("\164\x6f\157\x6c\x74\x69\160\120\x6f\163\x69\x74\151\157\156", $AHvXX); } public function type($AHvXX = "\142\x72\x65\141\x64\x63\162\x75\155\142") { return $this->set("\164\171\160\x65", $AHvXX); } }
