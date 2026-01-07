<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\145", "\x63\x68\x61\162\x74\55\162\x61\x64\x69\x6f\163"); } public function chartValueField($w0aoq = '') { return $this->set("\143\x68\x61\162\164\126\141\x6c\x75\x65\106\151\x65\x6c\144", $w0aoq); } public function config($w0aoq = '') { return $this->set("\x63\x6f\156\146\x69\x67", $w0aoq); } public function showTooltipOnHighlight($w0aoq = true) { return $this->set("\163\150\157\167\124\x6f\157\154\164\151\x70\x4f\x6e\x48\x69\x67\x68\154\151\147\150\x74", $w0aoq); } public function type($w0aoq = "\143\x68\x61\x72\164\x2d\x72\141\144\x69\157\x73") { return $this->set("\x74\x79\x70\x65", $w0aoq); } }
