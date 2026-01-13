<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ConditionGroupValue extends BaseRenderer { public function __construct() { $this->set("\143\x6f\156\152\165\x6e\x63\164\151\157\x6e", "\x61\x6e\144"); } public function children($JqsAq = '') { return $this->set("\x63\x68\151\154\144\x72\x65\156", $JqsAq); } public function conjunction($JqsAq = '') { return $this->set("\x63\x6f\x6e\x6a\x75\156\x63\164\x69\157\156", $JqsAq); } public function id($JqsAq = '') { return $this->set("\x69\x64", $JqsAq); } public function if($JqsAq = '') { return $this->set("\151\146", $JqsAq); } public function not($JqsAq = true) { return $this->set("\x6e\x6f\x74", $JqsAq); } }
