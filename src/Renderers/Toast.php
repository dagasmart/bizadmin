<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Toast extends BaseRenderer { public function __construct() { } public function body($JqsAq = '') { return $this->set("\x62\x6f\144\x79", $JqsAq); } public function closeButton($JqsAq = true) { return $this->set("\143\154\x6f\163\145\x42\x75\164\x74\157\x6e", $JqsAq); } public function items($JqsAq = '') { return $this->set("\x69\x74\145\155\163", $JqsAq); } public function level($JqsAq = '') { return $this->set("\x6c\145\x76\x65\154", $JqsAq); } public function position($JqsAq = '') { return $this->set("\160\157\163\151\x74\151\x6f\x6e", $JqsAq); } public function showIcon($JqsAq = true) { return $this->set("\x73\x68\157\x77\x49\x63\157\x6e", $JqsAq); } public function timeout($JqsAq = '') { return $this->set("\x74\151\155\145\157\165\x74", $JqsAq); } public function title($JqsAq = '') { return $this->set("\x74\151\x74\x6c\x65", $JqsAq); } }
