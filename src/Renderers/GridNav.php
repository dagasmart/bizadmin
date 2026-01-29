<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:32              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class GridNav extends BaseRenderer { public function __construct() { $this->set("\x74\x79\x70\145", "\x67\162\151\144\x2d\156\141\166"); } public function border($NXsnd = true) { return $this->set("\142\157\x72\144\x65\x72", $NXsnd); } public function center($NXsnd = true) { return $this->set("\x63\x65\156\x74\145\162", $NXsnd); } public function className($NXsnd = '') { return $this->set("\143\x6c\x61\163\x73\116\141\x6d\x65", $NXsnd); } public function columnNum($NXsnd = '') { return $this->set("\143\157\154\165\155\x6e\x4e\165\155", $NXsnd); } public function direction($NXsnd = '') { return $this->set("\x64\x69\162\x65\x63\x74\151\157\x6e", $NXsnd); } public function gutter($NXsnd = '') { return $this->set("\x67\x75\x74\164\x65\162", $NXsnd); } public function iconRatio($NXsnd = '') { return $this->set("\151\143\157\156\122\141\164\x69\x6f", $NXsnd); } public function itemClassName($NXsnd = '') { return $this->set("\x69\x74\x65\155\103\154\x61\x73\x73\116\x61\x6d\x65", $NXsnd); } public function options($NXsnd = '') { return $this->set("\x6f\x70\164\x69\x6f\156\163", $NXsnd); } public function reverse($NXsnd = true) { return $this->set("\x72\145\x76\145\162\163\x65", $NXsnd); } public function source($NXsnd = '') { return $this->set("\163\157\x75\x72\x63\x65", $NXsnd); } public function square($NXsnd = true) { return $this->set("\163\x71\165\141\x72\145", $NXsnd); } public function type($NXsnd = "\147\x72\x69\144\55\x6e\141\166") { return $this->set("\x74\171\160\x65", $NXsnd); } public function value($NXsnd = '') { return $this->set("\166\x61\x6c\x75\x65", $NXsnd); } }
