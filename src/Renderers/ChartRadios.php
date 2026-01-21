<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\x65", "\x63\x68\x61\x72\x74\x2d\162\141\x64\x69\x6f\x73"); } public function chartValueField($U5YWC = '') { return $this->set("\143\150\141\x72\164\126\x61\x6c\x75\145\106\x69\x65\x6c\x64", $U5YWC); } public function config($U5YWC = '') { return $this->set("\143\x6f\156\146\151\147", $U5YWC); } public function showTooltipOnHighlight($U5YWC = true) { return $this->set("\163\x68\x6f\167\x54\x6f\157\154\x74\151\160\117\156\110\x69\147\x68\154\x69\x67\x68\164", $U5YWC); } public function type($U5YWC = "\x63\150\141\x72\164\x2d\x72\x61\x64\x69\x6f\x73") { return $this->set("\164\171\x70\145", $U5YWC); } }
