<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\x79\x70\145", "\x63\150\141\x72\x74\55\x72\141\x64\151\157\163"); } public function chartValueField($nMamD = '') { return $this->set("\143\x68\x61\x72\164\x56\x61\154\165\x65\106\x69\x65\x6c\x64", $nMamD); } public function config($nMamD = '') { return $this->set("\143\157\156\x66\x69\147", $nMamD); } public function showTooltipOnHighlight($nMamD = true) { return $this->set("\x73\150\x6f\167\124\x6f\x6f\154\x74\x69\160\x4f\x6e\x48\151\x67\x68\x6c\151\147\x68\164", $nMamD); } public function type($nMamD = "\143\150\x61\162\x74\x2d\162\x61\144\x69\157\163") { return $this->set("\164\171\160\x65", $nMamD); } }
