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
 namespace DagaSmart\BizAdmin\Renderers; class ImageToolbarAction extends BaseRenderer { public function __construct() { $this->set("\153\145\x79", "\x52\x4f\124\101\124\105\137\122\111\107\x48\x54"); } public function confirmTitle($JqsAq = '') { return $this->set("\143\x6f\156\146\151\162\155\124\x69\x74\x6c\x65", $JqsAq); } public function disabled($JqsAq = true) { return $this->set("\x64\x69\x73\x61\x62\x6c\x65\x64", $JqsAq); } public function icon($JqsAq = '') { return $this->set("\151\x63\157\156", $JqsAq); } public function iconClassName($JqsAq = '') { return $this->set("\x69\143\157\x6e\x43\x6c\x61\163\x73\x4e\x61\x6d\x65", $JqsAq); } public function key($JqsAq = '') { return $this->set("\153\x65\x79", $JqsAq); } public function label($JqsAq = '') { return $this->set("\154\141\142\x65\154", $JqsAq); } }
