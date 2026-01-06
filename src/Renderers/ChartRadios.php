<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\171\160\145", "\143\x68\141\x72\164\x2d\x72\x61\144\x69\157\163"); } public function chartValueField($AHvXX = '') { return $this->set("\x63\x68\x61\162\164\126\141\154\165\x65\x46\x69\x65\x6c\x64", $AHvXX); } public function config($AHvXX = '') { return $this->set("\x63\157\156\x66\151\x67", $AHvXX); } public function showTooltipOnHighlight($AHvXX = true) { return $this->set("\163\150\x6f\x77\124\x6f\x6f\154\x74\x69\160\x4f\156\x48\151\147\150\x6c\151\x67\150\164", $AHvXX); } public function type($AHvXX = "\x63\x68\141\162\x74\x2d\x72\x61\144\x69\157\163") { return $this->set("\x74\x79\160\x65", $AHvXX); } }
