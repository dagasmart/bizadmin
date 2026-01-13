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
 namespace DagaSmart\BizAdmin\Renderers; class QRCodeImageSettings extends BaseRenderer { public function __construct() { } public function excavate($JqsAq = true) { return $this->set("\x65\x78\143\x61\x76\141\x74\145", $JqsAq); } public function height($JqsAq = '') { return $this->set("\150\x65\151\147\150\x74", $JqsAq); } public function src($JqsAq = '') { return $this->set("\163\162\143", $JqsAq); } public function width($JqsAq = '') { return $this->set("\167\x69\144\x74\x68", $JqsAq); } public function x($JqsAq = '') { return $this->set("\x78", $JqsAq); } public function y($JqsAq = '') { return $this->set("\171", $JqsAq); } }
