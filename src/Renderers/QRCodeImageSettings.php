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
 namespace DagaSmart\BizAdmin\Renderers; class QRCodeImageSettings extends BaseRenderer { public function __construct() { } public function excavate($PfrF0 = true) { return $this->set("\x65\x78\x63\141\x76\x61\164\145", $PfrF0); } public function height($PfrF0 = '') { return $this->set("\150\145\x69\147\150\164", $PfrF0); } public function src($PfrF0 = '') { return $this->set("\x73\162\x63", $PfrF0); } public function width($PfrF0 = '') { return $this->set("\x77\x69\144\x74\150", $PfrF0); } public function x($PfrF0 = '') { return $this->set("\170", $PfrF0); } public function y($PfrF0 = '') { return $this->set("\x79", $PfrF0); } }
