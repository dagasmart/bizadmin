<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class RowSelection extends BaseRenderer { public function __construct() { } public function columnWidth($PfrF0 = '') { return $this->set("\x63\x6f\x6c\x75\155\x6e\127\x69\144\x74\150", $PfrF0); } public function disableOn($PfrF0 = '') { return $this->set("\144\x69\x73\x61\142\x6c\145\117\156", $PfrF0); } public function keyField($PfrF0 = '') { return $this->set("\x6b\145\171\x46\x69\145\154\x64", $PfrF0); } public function rowClick($PfrF0 = true) { return $this->set("\162\157\167\103\154\151\x63\153", $PfrF0); } public function selectedRowKeys($PfrF0 = '') { return $this->set("\163\145\154\x65\143\x74\x65\144\x52\157\x77\113\145\171\x73", $PfrF0); } public function selectedRowKeysExpr($PfrF0 = '') { return $this->set("\x73\x65\x6c\145\143\x74\x65\144\x52\x6f\x77\x4b\x65\171\163\x45\170\160\162", $PfrF0); } public function selections($PfrF0 = '') { return $this->set("\x73\x65\x6c\x65\143\x74\x69\x6f\x6e\163", $PfrF0); } public function type($PfrF0 = '') { return $this->set("\x74\171\160\x65", $PfrF0); } }
