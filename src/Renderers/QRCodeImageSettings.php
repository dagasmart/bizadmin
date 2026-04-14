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
 namespace DagaSmart\BizAdmin\Renderers; class QRCodeImageSettings extends BaseRenderer { public function __construct() { } public function excavate($msRQo = true) { return $this->set("\145\x78\x63\141\x76\141\x74\145", $msRQo); } public function height($msRQo = '') { return $this->set("\x68\x65\151\x67\x68\x74", $msRQo); } public function src($msRQo = '') { return $this->set("\163\x72\x63", $msRQo); } public function width($msRQo = '') { return $this->set("\x77\151\144\164\x68", $msRQo); } public function x($msRQo = '') { return $this->set("\170", $msRQo); } public function y($msRQo = '') { return $this->set("\x79", $msRQo); } }
