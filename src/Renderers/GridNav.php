<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:05              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class GridNav extends BaseRenderer { public function __construct() { $this->set("\164\x79\x70\145", "\x67\x72\151\x64\55\x6e\141\166"); } public function border($wMm3m = true) { return $this->set("\x62\x6f\162\144\x65\x72", $wMm3m); } public function center($wMm3m = true) { return $this->set("\x63\145\x6e\x74\x65\x72", $wMm3m); } public function className($wMm3m = '') { return $this->set("\143\x6c\x61\163\163\116\x61\155\x65", $wMm3m); } public function columnNum($wMm3m = '') { return $this->set("\143\x6f\154\x75\155\156\x4e\165\x6d", $wMm3m); } public function direction($wMm3m = '') { return $this->set("\x64\151\162\x65\x63\164\x69\x6f\156", $wMm3m); } public function gutter($wMm3m = '') { return $this->set("\147\165\164\164\x65\x72", $wMm3m); } public function iconRatio($wMm3m = '') { return $this->set("\151\143\x6f\156\122\x61\x74\151\157", $wMm3m); } public function itemClassName($wMm3m = '') { return $this->set("\151\x74\x65\155\103\154\141\163\163\x4e\x61\x6d\145", $wMm3m); } public function options($wMm3m = '') { return $this->set("\x6f\160\164\x69\157\x6e\163", $wMm3m); } public function reverse($wMm3m = true) { return $this->set("\162\145\x76\145\x72\163\145", $wMm3m); } public function source($wMm3m = '') { return $this->set("\163\157\x75\x72\x63\x65", $wMm3m); } public function square($wMm3m = true) { return $this->set("\x73\x71\x75\141\162\145", $wMm3m); } public function type($wMm3m = "\147\162\151\x64\55\x6e\141\166") { return $this->set("\x74\x79\x70\x65", $wMm3m); } public function value($wMm3m = '') { return $this->set("\166\141\x6c\165\145", $wMm3m); } }
