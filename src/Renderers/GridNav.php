<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:22              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class GridNav extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\145", "\147\x72\x69\x64\x2d\x6e\x61\x76"); } public function border($msRQo = true) { return $this->set("\142\x6f\162\x64\145\162", $msRQo); } public function center($msRQo = true) { return $this->set("\143\145\x6e\164\145\x72", $msRQo); } public function className($msRQo = '') { return $this->set("\143\x6c\x61\163\163\x4e\x61\x6d\145", $msRQo); } public function columnNum($msRQo = '') { return $this->set("\x63\x6f\x6c\165\155\156\116\165\x6d", $msRQo); } public function direction($msRQo = '') { return $this->set("\x64\151\x72\x65\143\x74\x69\157\156", $msRQo); } public function gutter($msRQo = '') { return $this->set("\147\165\x74\x74\x65\162", $msRQo); } public function iconRatio($msRQo = '') { return $this->set("\151\x63\157\x6e\122\141\x74\x69\157", $msRQo); } public function itemClassName($msRQo = '') { return $this->set("\151\x74\x65\155\x43\154\141\x73\163\116\141\155\145", $msRQo); } public function options($msRQo = '') { return $this->set("\x6f\160\x74\x69\x6f\156\x73", $msRQo); } public function reverse($msRQo = true) { return $this->set("\162\145\166\145\162\x73\x65", $msRQo); } public function source($msRQo = '') { return $this->set("\x73\157\x75\x72\x63\145", $msRQo); } public function square($msRQo = true) { return $this->set("\x73\x71\165\x61\x72\x65", $msRQo); } public function type($msRQo = "\x67\x72\151\144\x2d\x6e\x61\x76") { return $this->set("\x74\x79\160\x65", $msRQo); } public function value($msRQo = '') { return $this->set("\166\x61\154\165\145", $msRQo); } }
