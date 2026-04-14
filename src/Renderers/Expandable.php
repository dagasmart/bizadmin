<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Expandable extends BaseRenderer { public function __construct() { } public function expandableOn($msRQo = '') { return $this->set("\x65\170\160\x61\156\x64\141\x62\x6c\x65\117\x6e", $msRQo); } public function expandedRowClassNameExpr($msRQo = '') { return $this->set("\145\170\160\141\x6e\144\x65\144\122\x6f\167\103\154\x61\163\x73\116\x61\x6d\145\x45\x78\160\162", $msRQo); } public function expandedRowKeys($msRQo = '') { return $this->set("\145\x78\x70\x61\156\x64\x65\x64\x52\x6f\167\113\145\171\x73", $msRQo); } public function expandedRowKeysExpr($msRQo = '') { return $this->set("\x65\170\160\141\156\x64\145\x64\122\157\x77\x4b\x65\x79\x73\x45\x78\160\x72", $msRQo); } public function keyField($msRQo = '') { return $this->set("\153\x65\x79\106\151\145\x6c\x64", $msRQo); } public function type($msRQo = '') { return $this->set("\164\x79\x70\145", $msRQo); } }
