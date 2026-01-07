<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Breadcrumb extends BaseRenderer { public function __construct() { $this->set("\x74\171\160\145", "\x62\162\x65\141\x64\143\x72\x75\x6d\x62"); } public function className($w0aoq = '') { return $this->set("\143\x6c\x61\x73\163\x4e\x61\155\145", $w0aoq); } public function dropdownClassName($w0aoq = '') { return $this->set("\144\162\157\x70\144\x6f\x77\x6e\x43\154\x61\x73\x73\x4e\141\155\145", $w0aoq); } public function dropdownItemClassName($w0aoq = '') { return $this->set("\x64\x72\x6f\x70\x64\157\167\156\111\x74\x65\x6d\103\x6c\x61\x73\163\116\141\155\x65", $w0aoq); } public function itemClassName($w0aoq = '') { return $this->set("\151\164\x65\x6d\x43\154\x61\x73\163\116\x61\155\145", $w0aoq); } public function items($w0aoq = '') { return $this->set("\151\x74\145\x6d\x73", $w0aoq); } public function labelMaxLength($w0aoq = '') { return $this->set("\x6c\141\142\145\154\x4d\x61\x78\x4c\145\156\x67\164\x68", $w0aoq); } public function separator($w0aoq = '') { return $this->set("\163\x65\160\141\162\x61\x74\157\162", $w0aoq); } public function separatorClassName($w0aoq = '') { return $this->set("\x73\x65\160\x61\x72\x61\x74\157\x72\x43\154\x61\163\x73\x4e\141\x6d\x65", $w0aoq); } public function source($w0aoq = '') { return $this->set("\x73\x6f\165\162\143\x65", $w0aoq); } public function tooltipPosition($w0aoq = '') { return $this->set("\164\157\x6f\x6c\x74\x69\x70\120\157\163\151\x74\x69\157\156", $w0aoq); } public function type($w0aoq = "\142\162\145\x61\x64\x63\x72\x75\x6d\x62") { return $this->set("\x74\171\160\x65", $w0aoq); } }
