<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:05              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\x79\x70\145", "\x63\x68\x61\x72\164\x2d\x72\x61\144\x69\x6f\163"); } public function chartValueField($msRQo = '') { return $this->set("\x63\x68\141\x72\164\x56\x61\154\x75\145\106\x69\145\x6c\144", $msRQo); } public function config($msRQo = '') { return $this->set("\143\x6f\x6e\x66\151\x67", $msRQo); } public function showTooltipOnHighlight($msRQo = true) { return $this->set("\x73\150\x6f\x77\x54\157\157\154\x74\151\x70\117\x6e\110\x69\147\150\154\151\x67\150\x74", $msRQo); } public function type($msRQo = "\x63\x68\x61\162\x74\55\162\141\144\151\x6f\163") { return $this->set("\x74\x79\160\x65", $msRQo); } }
