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
 namespace DagaSmart\BizAdmin\Renderers; class ImageToolbarAction extends BaseRenderer { public function __construct() { $this->set("\x6b\145\x79", "\122\117\x54\101\x54\105\137\122\x49\107\x48\124"); } public function confirmTitle($AHvXX = '') { return $this->set("\x63\x6f\156\x66\x69\162\155\x54\151\164\x6c\145", $AHvXX); } public function disabled($AHvXX = true) { return $this->set("\x64\x69\163\141\142\x6c\x65\x64", $AHvXX); } public function icon($AHvXX = '') { return $this->set("\x69\x63\157\x6e", $AHvXX); } public function iconClassName($AHvXX = '') { return $this->set("\x69\x63\x6f\156\x43\x6c\x61\x73\x73\x4e\x61\155\x65", $AHvXX); } public function key($AHvXX = '') { return $this->set("\153\145\x79", $AHvXX); } public function label($AHvXX = '') { return $this->set("\154\141\x62\x65\154", $AHvXX); } }
