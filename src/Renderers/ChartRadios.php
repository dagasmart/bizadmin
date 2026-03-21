<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:30              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\x65", "\143\x68\141\162\x74\55\162\x61\x64\151\157\x73"); } public function chartValueField($b5EKT = '') { return $this->set("\143\x68\141\162\164\126\141\154\165\145\106\x69\145\154\144", $b5EKT); } public function config($b5EKT = '') { return $this->set("\143\x6f\156\x66\151\147", $b5EKT); } public function showTooltipOnHighlight($b5EKT = true) { return $this->set("\163\150\157\167\x54\157\x6f\x6c\x74\151\160\117\156\110\151\147\x68\x6c\x69\147\x68\164", $b5EKT); } public function type($b5EKT = "\x63\x68\141\162\164\55\162\141\144\x69\x6f\163") { return $this->set("\164\x79\x70\x65", $b5EKT); } }
