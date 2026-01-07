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
 namespace DagaSmart\BizAdmin\Renderers; class Barcode extends BaseRenderer { public function __construct() { $this->set("\x74\171\160\145", "\142\x61\x72\143\157\x64\145"); } public function className($w0aoq = '') { return $this->set("\x63\x6c\x61\163\163\x4e\x61\x6d\145", $w0aoq); } public function type($w0aoq = "\142\x61\x72\143\x6f\x64\x65") { return $this->set("\x74\171\x70\145", $w0aoq); } }
