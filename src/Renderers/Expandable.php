<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:21              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Expandable extends BaseRenderer { public function __construct() { } public function expandableOn($w0aoq = '') { return $this->set("\x65\x78\160\x61\156\144\141\142\154\145\x4f\x6e", $w0aoq); } public function expandedRowClassNameExpr($w0aoq = '') { return $this->set("\x65\x78\x70\x61\x6e\x64\x65\x64\122\157\x77\103\154\141\163\163\x4e\141\x6d\145\x45\x78\160\x72", $w0aoq); } public function expandedRowKeys($w0aoq = '') { return $this->set("\145\170\160\141\156\144\145\144\122\x6f\167\113\145\x79\163", $w0aoq); } public function expandedRowKeysExpr($w0aoq = '') { return $this->set("\145\x78\x70\141\x6e\x64\145\144\122\157\x77\113\x65\x79\x73\x45\x78\x70\162", $w0aoq); } public function keyField($w0aoq = '') { return $this->set("\153\x65\171\x46\151\145\x6c\x64", $w0aoq); } public function type($w0aoq = '') { return $this->set("\164\171\x70\145", $w0aoq); } }
