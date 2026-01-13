<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Breadcrumb extends BaseRenderer { public function __construct() { $this->set("\x74\x79\x70\x65", "\142\x72\145\x61\144\x63\x72\165\155\142"); } public function className($JqsAq = '') { return $this->set("\143\154\141\163\163\116\141\x6d\145", $JqsAq); } public function dropdownClassName($JqsAq = '') { return $this->set("\144\x72\157\x70\144\x6f\167\156\103\x6c\141\163\x73\x4e\141\x6d\145", $JqsAq); } public function dropdownItemClassName($JqsAq = '') { return $this->set("\x64\162\157\160\144\157\x77\156\111\x74\145\155\x43\154\141\x73\x73\x4e\x61\155\145", $JqsAq); } public function itemClassName($JqsAq = '') { return $this->set("\x69\164\x65\x6d\103\x6c\141\x73\163\116\x61\x6d\x65", $JqsAq); } public function items($JqsAq = '') { return $this->set("\x69\164\145\155\163", $JqsAq); } public function labelMaxLength($JqsAq = '') { return $this->set("\154\x61\142\145\154\115\x61\170\x4c\x65\x6e\147\x74\x68", $JqsAq); } public function separator($JqsAq = '') { return $this->set("\x73\145\x70\x61\x72\141\164\157\x72", $JqsAq); } public function separatorClassName($JqsAq = '') { return $this->set("\163\x65\x70\x61\x72\x61\x74\x6f\x72\103\154\141\x73\163\116\x61\x6d\145", $JqsAq); } public function source($JqsAq = '') { return $this->set("\163\157\x75\x72\143\x65", $JqsAq); } public function tooltipPosition($JqsAq = '') { return $this->set("\x74\157\x6f\x6c\164\151\160\x50\157\x73\151\164\x69\157\x6e", $JqsAq); } public function type($JqsAq = "\142\x72\x65\141\x64\143\x72\x75\155\142") { return $this->set("\x74\171\x70\145", $JqsAq); } }
