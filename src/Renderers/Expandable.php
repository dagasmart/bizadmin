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
 namespace DagaSmart\BizAdmin\Renderers; class Expandable extends BaseRenderer { public function __construct() { } public function expandableOn($AHvXX = '') { return $this->set("\145\x78\160\x61\x6e\x64\141\142\x6c\x65\x4f\x6e", $AHvXX); } public function expandedRowClassNameExpr($AHvXX = '') { return $this->set("\x65\x78\x70\x61\x6e\x64\145\x64\122\157\x77\103\154\x61\x73\163\x4e\141\x6d\145\105\170\160\162", $AHvXX); } public function expandedRowKeys($AHvXX = '') { return $this->set("\x65\x78\x70\x61\156\x64\145\144\x52\157\167\113\x65\x79\163", $AHvXX); } public function expandedRowKeysExpr($AHvXX = '') { return $this->set("\x65\170\160\141\x6e\x64\x65\144\122\157\x77\113\145\171\163\105\170\x70\x72", $AHvXX); } public function keyField($AHvXX = '') { return $this->set("\153\x65\x79\x46\151\145\x6c\144", $AHvXX); } public function type($AHvXX = '') { return $this->set("\164\x79\x70\145", $AHvXX); } }
