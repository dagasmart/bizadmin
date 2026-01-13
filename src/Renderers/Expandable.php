<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Expandable extends BaseRenderer { public function __construct() { } public function expandableOn($JqsAq = '') { return $this->set("\x65\170\160\x61\156\x64\141\142\x6c\145\x4f\x6e", $JqsAq); } public function expandedRowClassNameExpr($JqsAq = '') { return $this->set("\x65\170\160\141\x6e\144\x65\x64\x52\157\x77\x43\154\141\x73\x73\116\x61\x6d\x65\105\x78\x70\162", $JqsAq); } public function expandedRowKeys($JqsAq = '') { return $this->set("\145\170\160\141\x6e\144\x65\144\x52\157\167\x4b\145\x79\x73", $JqsAq); } public function expandedRowKeysExpr($JqsAq = '') { return $this->set("\145\170\160\x61\156\x64\145\144\x52\157\x77\x4b\145\171\x73\x45\170\160\x72", $JqsAq); } public function keyField($JqsAq = '') { return $this->set("\x6b\x65\x79\106\x69\145\x6c\x64", $JqsAq); } public function type($JqsAq = '') { return $this->set("\164\x79\160\x65", $JqsAq); } }
