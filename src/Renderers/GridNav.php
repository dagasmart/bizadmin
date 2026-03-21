<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:31              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class GridNav extends BaseRenderer { public function __construct() { $this->set("\x74\171\x70\145", "\147\x72\x69\x64\x2d\156\141\x76"); } public function border($b5EKT = true) { return $this->set("\x62\157\x72\x64\x65\162", $b5EKT); } public function center($b5EKT = true) { return $this->set("\143\x65\x6e\164\x65\x72", $b5EKT); } public function className($b5EKT = '') { return $this->set("\143\x6c\141\163\163\x4e\x61\x6d\145", $b5EKT); } public function columnNum($b5EKT = '') { return $this->set("\143\157\x6c\x75\x6d\156\x4e\165\155", $b5EKT); } public function direction($b5EKT = '') { return $this->set("\144\x69\162\x65\143\164\151\x6f\x6e", $b5EKT); } public function gutter($b5EKT = '') { return $this->set("\147\x75\164\164\x65\162", $b5EKT); } public function iconRatio($b5EKT = '') { return $this->set("\x69\x63\157\156\x52\141\164\x69\157", $b5EKT); } public function itemClassName($b5EKT = '') { return $this->set("\x69\164\x65\x6d\x43\154\x61\x73\163\x4e\x61\x6d\145", $b5EKT); } public function options($b5EKT = '') { return $this->set("\x6f\160\164\151\x6f\x6e\163", $b5EKT); } public function reverse($b5EKT = true) { return $this->set("\162\x65\x76\x65\x72\x73\145", $b5EKT); } public function source($b5EKT = '') { return $this->set("\x73\x6f\165\162\143\145", $b5EKT); } public function square($b5EKT = true) { return $this->set("\163\161\165\x61\x72\145", $b5EKT); } public function type($b5EKT = "\x67\x72\x69\x64\55\x6e\141\x76") { return $this->set("\164\171\x70\x65", $b5EKT); } public function value($b5EKT = '') { return $this->set("\x76\x61\x6c\165\145", $b5EKT); } }
