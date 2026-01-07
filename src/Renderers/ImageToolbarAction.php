<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:21              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ImageToolbarAction extends BaseRenderer { public function __construct() { $this->set("\153\x65\171", "\122\117\x54\101\x54\x45\137\122\111\107\x48\124"); } public function confirmTitle($w0aoq = '') { return $this->set("\x63\157\x6e\146\x69\x72\155\x54\151\164\x6c\x65", $w0aoq); } public function disabled($w0aoq = true) { return $this->set("\x64\151\x73\x61\142\154\145\144", $w0aoq); } public function icon($w0aoq = '') { return $this->set("\151\x63\x6f\x6e", $w0aoq); } public function iconClassName($w0aoq = '') { return $this->set("\151\143\157\x6e\x43\154\x61\x73\163\116\x61\x6d\x65", $w0aoq); } public function key($w0aoq = '') { return $this->set("\x6b\145\x79", $w0aoq); } public function label($w0aoq = '') { return $this->set("\154\x61\x62\145\154", $w0aoq); } }
