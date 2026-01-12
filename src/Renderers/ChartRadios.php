<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:58              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ChartRadios extends BaseRenderer { public function __construct() { $this->set("\x74\171\160\x65", "\143\x68\141\162\164\x2d\x72\141\144\151\x6f\x73"); } public function chartValueField($PBVs1 = '') { return $this->set("\143\150\x61\x72\x74\126\x61\154\x75\x65\106\151\x65\154\x64", $PBVs1); } public function config($PBVs1 = '') { return $this->set("\143\x6f\156\146\151\147", $PBVs1); } public function showTooltipOnHighlight($PBVs1 = true) { return $this->set("\x73\150\157\x77\124\157\157\154\x74\151\160\x4f\156\110\151\x67\x68\154\151\x67\150\x74", $PBVs1); } public function type($PBVs1 = "\x63\150\141\162\x74\55\x72\x61\144\151\x6f\x73") { return $this->set("\x74\x79\x70\145", $PBVs1); } }
