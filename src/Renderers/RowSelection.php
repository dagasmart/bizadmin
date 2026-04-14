<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class RowSelection extends BaseRenderer { public function __construct() { } public function columnWidth($msRQo = '') { return $this->set("\143\x6f\x6c\x75\155\x6e\127\x69\144\164\x68", $msRQo); } public function disableOn($msRQo = '') { return $this->set("\x64\x69\x73\141\x62\x6c\145\117\x6e", $msRQo); } public function keyField($msRQo = '') { return $this->set("\153\x65\x79\x46\151\145\154\x64", $msRQo); } public function rowClick($msRQo = true) { return $this->set("\x72\x6f\167\x43\x6c\x69\x63\153", $msRQo); } public function selectedRowKeys($msRQo = '') { return $this->set("\x73\x65\x6c\x65\x63\164\145\144\122\x6f\x77\113\145\171\x73", $msRQo); } public function selectedRowKeysExpr($msRQo = '') { return $this->set("\163\145\x6c\145\143\x74\145\x64\122\157\x77\x4b\x65\171\x73\x45\170\160\162", $msRQo); } public function selections($msRQo = '') { return $this->set("\x73\x65\x6c\145\143\x74\x69\x6f\156\x73", $msRQo); } public function type($msRQo = '') { return $this->set("\x74\x79\160\x65", $msRQo); } }
