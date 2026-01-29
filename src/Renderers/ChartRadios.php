<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:22              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\164\x79\x70\x65", "\143\x68\x61\162\x74\x2d\x72\141\x64\151\157\x73"); } public function chartValueField($msRQo = '') { return $this->set("\x63\150\141\162\x74\x56\x61\154\165\145\x46\x69\x65\x6c\144", $msRQo); } public function config($msRQo = '') { return $this->set("\x63\x6f\156\x66\x69\x67", $msRQo); } public function showTooltipOnHighlight($msRQo = true) { return $this->set("\163\150\157\167\x54\x6f\157\x6c\x74\x69\x70\117\156\110\x69\x67\150\x6c\x69\x67\150\164", $msRQo); } public function type($msRQo = "\x63\x68\x61\162\x74\x2d\x72\141\144\151\157\163") { return $this->set("\164\171\160\x65", $msRQo); } }
