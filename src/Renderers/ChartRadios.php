<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\145", "\x63\x68\x61\162\x74\55\x72\x61\144\x69\157\163"); } public function chartValueField($msRQo = '') { return $this->set("\x63\x68\141\162\164\x56\141\x6c\165\x65\x46\151\145\154\144", $msRQo); } public function config($msRQo = '') { return $this->set("\x63\x6f\x6e\x66\151\x67", $msRQo); } public function showTooltipOnHighlight($msRQo = true) { return $this->set("\163\150\157\167\124\x6f\x6f\x6c\164\x69\x70\x4f\156\x48\151\x67\x68\x6c\x69\x67\x68\x74", $msRQo); } public function type($msRQo = "\x63\x68\141\162\x74\55\162\x61\x64\151\x6f\163") { return $this->set("\x74\171\x70\x65", $msRQo); } }
