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
 namespace DagaSmart\BizAdmin\Renderers; class ImageToolbarAction extends BaseRenderer { public function __construct() { $this->set("\x6b\x65\171", "\x52\x4f\124\101\x54\x45\x5f\122\x49\x47\110\x54"); } public function confirmTitle($msRQo = '') { return $this->set("\x63\157\x6e\146\151\162\155\x54\151\164\154\145", $msRQo); } public function disabled($msRQo = true) { return $this->set("\x64\x69\163\x61\x62\x6c\x65\144", $msRQo); } public function icon($msRQo = '') { return $this->set("\151\143\x6f\156", $msRQo); } public function iconClassName($msRQo = '') { return $this->set("\151\143\x6f\x6e\x43\x6c\141\163\163\x4e\x61\x6d\145", $msRQo); } public function key($msRQo = '') { return $this->set("\x6b\x65\x79", $msRQo); } public function label($msRQo = '') { return $this->set("\154\x61\x62\145\154", $msRQo); } }
