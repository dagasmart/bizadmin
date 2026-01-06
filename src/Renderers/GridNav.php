<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:42              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class GridNav extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\x65", "\147\162\151\x64\x2d\156\x61\166"); } public function border($AHvXX = true) { return $this->set("\x62\x6f\162\144\x65\x72", $AHvXX); } public function center($AHvXX = true) { return $this->set("\143\145\x6e\164\x65\162", $AHvXX); } public function className($AHvXX = '') { return $this->set("\x63\154\x61\x73\x73\x4e\x61\155\145", $AHvXX); } public function columnNum($AHvXX = '') { return $this->set("\x63\x6f\154\165\x6d\156\x4e\x75\155", $AHvXX); } public function direction($AHvXX = '') { return $this->set("\x64\151\162\x65\143\x74\x69\x6f\156", $AHvXX); } public function gutter($AHvXX = '') { return $this->set("\147\165\x74\164\x65\x72", $AHvXX); } public function iconRatio($AHvXX = '') { return $this->set("\x69\x63\x6f\156\x52\141\164\151\x6f", $AHvXX); } public function itemClassName($AHvXX = '') { return $this->set("\151\164\145\155\103\x6c\x61\163\x73\x4e\141\x6d\145", $AHvXX); } public function options($AHvXX = '') { return $this->set("\157\x70\x74\x69\157\156\163", $AHvXX); } public function reverse($AHvXX = true) { return $this->set("\162\145\166\x65\162\163\x65", $AHvXX); } public function source($AHvXX = '') { return $this->set("\163\x6f\165\x72\x63\145", $AHvXX); } public function square($AHvXX = true) { return $this->set("\163\161\165\x61\x72\x65", $AHvXX); } public function type($AHvXX = "\x67\x72\x69\x64\x2d\156\141\166") { return $this->set("\x74\171\160\145", $AHvXX); } public function value($AHvXX = '') { return $this->set("\x76\x61\x6c\x75\145", $AHvXX); } }
