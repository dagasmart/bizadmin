<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Expandable extends BaseRenderer { public function __construct() { } public function expandableOn($PfrF0 = '') { return $this->set("\x65\170\160\x61\x6e\144\x61\x62\x6c\x65\x4f\156", $PfrF0); } public function expandedRowClassNameExpr($PfrF0 = '') { return $this->set("\x65\x78\160\141\156\144\x65\144\122\x6f\x77\x43\x6c\141\163\163\x4e\141\x6d\x65\105\x78\x70\x72", $PfrF0); } public function expandedRowKeys($PfrF0 = '') { return $this->set("\x65\170\x70\x61\x6e\144\x65\x64\x52\157\x77\x4b\145\171\163", $PfrF0); } public function expandedRowKeysExpr($PfrF0 = '') { return $this->set("\145\x78\160\141\x6e\144\145\144\122\157\x77\113\145\171\163\x45\x78\160\x72", $PfrF0); } public function keyField($PfrF0 = '') { return $this->set("\153\145\x79\x46\151\x65\x6c\144", $PfrF0); } public function type($PfrF0 = '') { return $this->set("\x74\171\160\145", $PfrF0); } }
