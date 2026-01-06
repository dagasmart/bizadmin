<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Barcode extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\x65", "\x62\141\x72\x63\x6f\x64\145"); } public function className($AHvXX = '') { return $this->set("\x63\154\x61\x73\163\116\x61\155\145", $AHvXX); } public function type($AHvXX = "\142\141\162\143\157\144\x65") { return $this->set("\164\x79\160\x65", $AHvXX); } }
