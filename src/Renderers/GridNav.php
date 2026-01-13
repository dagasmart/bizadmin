<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class GridNav extends BaseRenderer { public function __construct() { $this->set("\164\x79\160\x65", "\x67\162\x69\144\55\156\x61\166"); } public function border($JqsAq = true) { return $this->set("\142\x6f\162\144\145\162", $JqsAq); } public function center($JqsAq = true) { return $this->set("\143\145\156\164\x65\x72", $JqsAq); } public function className($JqsAq = '') { return $this->set("\143\154\141\x73\x73\116\141\x6d\145", $JqsAq); } public function columnNum($JqsAq = '') { return $this->set("\143\157\154\x75\155\x6e\116\165\x6d", $JqsAq); } public function direction($JqsAq = '') { return $this->set("\144\151\x72\145\x63\164\151\157\156", $JqsAq); } public function gutter($JqsAq = '') { return $this->set("\x67\165\164\x74\x65\x72", $JqsAq); } public function iconRatio($JqsAq = '') { return $this->set("\151\143\x6f\x6e\122\x61\164\151\157", $JqsAq); } public function itemClassName($JqsAq = '') { return $this->set("\151\x74\145\155\103\154\141\x73\x73\116\x61\155\145", $JqsAq); } public function options($JqsAq = '') { return $this->set("\x6f\160\164\x69\157\x6e\x73", $JqsAq); } public function reverse($JqsAq = true) { return $this->set("\162\x65\166\x65\162\163\x65", $JqsAq); } public function source($JqsAq = '') { return $this->set("\163\x6f\x75\x72\143\x65", $JqsAq); } public function square($JqsAq = true) { return $this->set("\163\161\165\x61\x72\x65", $JqsAq); } public function type($JqsAq = "\x67\x72\x69\x64\55\156\141\x76") { return $this->set("\164\x79\x70\145", $JqsAq); } public function value($JqsAq = '') { return $this->set("\x76\141\154\x75\145", $JqsAq); } }
