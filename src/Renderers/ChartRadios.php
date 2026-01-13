<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\164\x79\160\145", "\x63\x68\x61\162\x74\55\x72\x61\x64\x69\157\163"); } public function chartValueField($JqsAq = '') { return $this->set("\143\150\x61\162\x74\126\x61\x6c\165\145\106\151\145\154\144", $JqsAq); } public function config($JqsAq = '') { return $this->set("\x63\x6f\x6e\146\151\147", $JqsAq); } public function showTooltipOnHighlight($JqsAq = true) { return $this->set("\163\x68\x6f\x77\x54\157\x6f\154\164\x69\x70\117\x6e\110\x69\x67\x68\x6c\x69\x67\x68\164", $JqsAq); } public function type($JqsAq = "\143\x68\141\162\x74\x2d\162\141\144\151\157\x73") { return $this->set("\x74\171\x70\145", $JqsAq); } }
