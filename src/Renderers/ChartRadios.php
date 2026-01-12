<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\x79\x70\145", "\143\x68\x61\x72\x74\55\x72\141\144\151\157\x73"); } public function chartValueField($eXCcR = '') { return $this->set("\143\x68\141\162\164\126\141\154\x75\x65\x46\x69\145\154\144", $eXCcR); } public function config($eXCcR = '') { return $this->set("\x63\157\156\x66\x69\147", $eXCcR); } public function showTooltipOnHighlight($eXCcR = true) { return $this->set("\x73\150\157\x77\x54\x6f\157\x6c\164\x69\160\117\156\110\151\x67\x68\154\151\147\x68\164", $eXCcR); } public function type($eXCcR = "\x63\150\x61\x72\164\55\162\141\x64\151\157\x73") { return $this->set("\x74\x79\160\145", $eXCcR); } }
