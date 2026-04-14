<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Breadcrumb extends BaseRenderer { public function __construct() { $this->set("\164\171\160\x65", "\x62\x72\x65\x61\x64\143\162\x75\x6d\x62"); } public function className($msRQo = '') { return $this->set("\x63\x6c\x61\163\x73\116\x61\x6d\x65", $msRQo); } public function dropdownClassName($msRQo = '') { return $this->set("\x64\x72\157\x70\144\x6f\x77\156\x43\154\x61\x73\x73\116\141\x6d\145", $msRQo); } public function dropdownItemClassName($msRQo = '') { return $this->set("\144\x72\157\x70\x64\x6f\x77\156\111\x74\x65\x6d\x43\154\141\163\163\116\141\x6d\x65", $msRQo); } public function itemClassName($msRQo = '') { return $this->set("\151\x74\x65\x6d\103\154\x61\x73\x73\x4e\x61\x6d\x65", $msRQo); } public function items($msRQo = '') { return $this->set("\151\x74\x65\155\163", $msRQo); } public function labelMaxLength($msRQo = '') { return $this->set("\x6c\x61\142\145\154\115\141\170\114\x65\156\147\x74\150", $msRQo); } public function separator($msRQo = '') { return $this->set("\x73\x65\160\141\x72\141\x74\157\x72", $msRQo); } public function separatorClassName($msRQo = '') { return $this->set("\163\x65\x70\x61\x72\x61\x74\x6f\162\103\154\x61\x73\x73\116\141\155\145", $msRQo); } public function source($msRQo = '') { return $this->set("\163\157\165\162\x63\x65", $msRQo); } public function tooltipPosition($msRQo = '') { return $this->set("\x74\x6f\157\x6c\164\151\x70\120\x6f\163\x69\x74\x69\157\x6e", $msRQo); } public function type($msRQo = "\x62\162\145\141\x64\143\162\x75\x6d\142") { return $this->set("\164\171\160\145", $msRQo); } }
