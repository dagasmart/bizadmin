<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\145", "\143\x68\x61\162\x74\x2d\x72\141\x64\x69\157\163"); } public function chartValueField($PfrF0 = '') { return $this->set("\x63\x68\141\162\164\x56\x61\x6c\x75\x65\106\151\x65\154\144", $PfrF0); } public function config($PfrF0 = '') { return $this->set("\143\x6f\156\146\x69\x67", $PfrF0); } public function showTooltipOnHighlight($PfrF0 = true) { return $this->set("\163\150\157\x77\124\157\157\x6c\x74\x69\x70\117\156\x48\151\147\x68\x6c\151\147\150\164", $PfrF0); } public function type($PfrF0 = "\x63\x68\x61\x72\164\55\162\x61\x64\x69\x6f\x73") { return $this->set("\x74\x79\x70\145", $PfrF0); } }
