<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:42              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class RowSelection extends BaseRenderer { public function __construct() { } public function columnWidth($AHvXX = '') { return $this->set("\x63\x6f\154\165\155\156\127\x69\144\x74\150", $AHvXX); } public function disableOn($AHvXX = '') { return $this->set("\x64\151\x73\141\x62\154\145\117\156", $AHvXX); } public function keyField($AHvXX = '') { return $this->set("\x6b\x65\x79\106\x69\x65\x6c\x64", $AHvXX); } public function rowClick($AHvXX = true) { return $this->set("\162\157\167\x43\x6c\x69\143\153", $AHvXX); } public function selectedRowKeys($AHvXX = '') { return $this->set("\x73\x65\154\x65\143\x74\x65\x64\122\157\x77\x4b\x65\171\163", $AHvXX); } public function selectedRowKeysExpr($AHvXX = '') { return $this->set("\163\145\154\145\143\x74\x65\144\122\x6f\x77\113\145\171\x73\x45\170\160\x72", $AHvXX); } public function selections($AHvXX = '') { return $this->set("\163\x65\x6c\145\143\x74\151\157\156\x73", $AHvXX); } public function type($AHvXX = '') { return $this->set("\164\x79\x70\145", $AHvXX); } }
