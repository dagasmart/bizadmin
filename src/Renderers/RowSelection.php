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
 namespace DagaSmart\BizAdmin\Renderers; class RowSelection extends BaseRenderer { public function __construct() { } public function columnWidth($w0aoq = '') { return $this->set("\x63\157\154\x75\155\x6e\x57\151\144\x74\150", $w0aoq); } public function disableOn($w0aoq = '') { return $this->set("\x64\x69\163\141\142\x6c\x65\117\156", $w0aoq); } public function keyField($w0aoq = '') { return $this->set("\153\145\171\x46\x69\x65\x6c\144", $w0aoq); } public function rowClick($w0aoq = true) { return $this->set("\x72\157\167\103\154\151\143\x6b", $w0aoq); } public function selectedRowKeys($w0aoq = '') { return $this->set("\x73\x65\154\145\143\164\x65\x64\122\157\167\113\x65\x79\x73", $w0aoq); } public function selectedRowKeysExpr($w0aoq = '') { return $this->set("\x73\145\x6c\145\x63\164\x65\144\122\157\x77\113\x65\171\163\x45\x78\x70\x72", $w0aoq); } public function selections($w0aoq = '') { return $this->set("\163\x65\154\x65\x63\x74\x69\157\156\163", $w0aoq); } public function type($w0aoq = '') { return $this->set("\164\x79\160\x65", $w0aoq); } }
