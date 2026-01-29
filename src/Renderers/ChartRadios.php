<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:31              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\x79\x70\x65", "\x63\x68\141\162\164\x2d\x72\x61\144\x69\157\x73"); } public function chartValueField($NXsnd = '') { return $this->set("\x63\x68\x61\162\x74\x56\x61\154\165\x65\106\151\145\154\x64", $NXsnd); } public function config($NXsnd = '') { return $this->set("\x63\157\x6e\146\x69\147", $NXsnd); } public function showTooltipOnHighlight($NXsnd = true) { return $this->set("\x73\150\x6f\x77\x54\x6f\x6f\154\x74\x69\160\x4f\x6e\x48\x69\x67\150\x6c\151\147\x68\x74", $NXsnd); } public function type($NXsnd = "\143\150\x61\162\x74\x2d\162\x61\x64\151\157\163") { return $this->set("\x74\171\160\145", $NXsnd); } }
