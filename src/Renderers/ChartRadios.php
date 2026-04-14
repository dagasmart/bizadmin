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
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\171\x70\145", "\143\150\x61\162\164\x2d\162\x61\144\151\157\163"); } public function chartValueField($msRQo = '') { return $this->set("\143\x68\141\162\x74\x56\141\154\165\x65\x46\151\145\154\144", $msRQo); } public function config($msRQo = '') { return $this->set("\143\x6f\156\x66\151\x67", $msRQo); } public function showTooltipOnHighlight($msRQo = true) { return $this->set("\x73\150\157\167\x54\x6f\157\154\164\x69\160\117\156\110\x69\x67\150\154\151\147\150\x74", $msRQo); } public function type($msRQo = "\143\x68\x61\x72\x74\x2d\162\141\144\151\x6f\163") { return $this->set("\164\171\x70\145", $msRQo); } }
