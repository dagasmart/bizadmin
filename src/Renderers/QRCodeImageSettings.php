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
 namespace DagaSmart\BizAdmin\Renderers; class QRCodeImageSettings extends BaseRenderer { public function __construct() { } public function excavate($AHvXX = true) { return $this->set("\x65\x78\143\141\166\141\x74\x65", $AHvXX); } public function height($AHvXX = '') { return $this->set("\150\x65\151\147\x68\x74", $AHvXX); } public function src($AHvXX = '') { return $this->set("\163\x72\x63", $AHvXX); } public function width($AHvXX = '') { return $this->set("\x77\151\x64\x74\x68", $AHvXX); } public function x($AHvXX = '') { return $this->set("\170", $AHvXX); } public function y($AHvXX = '') { return $this->set("\171", $AHvXX); } }
