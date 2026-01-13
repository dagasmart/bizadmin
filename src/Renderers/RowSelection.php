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
 namespace DagaSmart\BizAdmin\Renderers; class RowSelection extends BaseRenderer { public function __construct() { } public function columnWidth($JqsAq = '') { return $this->set("\x63\157\154\165\x6d\156\x57\x69\144\164\x68", $JqsAq); } public function disableOn($JqsAq = '') { return $this->set("\x64\x69\x73\141\x62\x6c\x65\117\156", $JqsAq); } public function keyField($JqsAq = '') { return $this->set("\x6b\145\x79\106\151\145\x6c\144", $JqsAq); } public function rowClick($JqsAq = true) { return $this->set("\162\x6f\167\x43\x6c\x69\x63\x6b", $JqsAq); } public function selectedRowKeys($JqsAq = '') { return $this->set("\163\x65\154\145\143\164\x65\x64\122\157\167\113\145\x79\x73", $JqsAq); } public function selectedRowKeysExpr($JqsAq = '') { return $this->set("\163\x65\154\145\143\x74\x65\144\122\157\x77\x4b\x65\171\x73\105\170\x70\162", $JqsAq); } public function selections($JqsAq = '') { return $this->set("\x73\145\x6c\145\143\164\151\157\x6e\x73", $JqsAq); } public function type($JqsAq = '') { return $this->set("\x74\171\x70\145", $JqsAq); } }
