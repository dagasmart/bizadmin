<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\171\160\145", "\x63\x68\x61\162\164\x2d\162\x61\x64\x69\157\163"); } public function chartValueField($wZVig = '') { return $this->set("\143\x68\x61\x72\x74\x56\141\154\165\x65\x46\151\x65\x6c\x64", $wZVig); } public function config($wZVig = '') { return $this->set("\143\x6f\x6e\x66\x69\147", $wZVig); } public function showTooltipOnHighlight($wZVig = true) { return $this->set("\163\150\157\167\x54\157\x6f\154\x74\x69\160\117\156\x48\x69\x67\x68\x6c\151\x67\150\x74", $wZVig); } public function type($wZVig = "\x63\x68\x61\x72\x74\55\162\141\x64\x69\157\163") { return $this->set("\x74\x79\160\145", $wZVig); } }
