<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Barcode extends BaseRenderer { public function __construct() { $this->set("\x74\171\x70\145", "\x62\x61\162\143\157\x64\x65"); } public function className($PfrF0 = '') { return $this->set("\143\x6c\x61\x73\163\116\141\x6d\x65", $PfrF0); } public function type($PfrF0 = "\142\141\162\x63\157\144\x65") { return $this->set("\164\171\x70\x65", $PfrF0); } }
