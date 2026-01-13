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
 namespace DagaSmart\BizAdmin\Renderers; class Custom extends BaseRenderer { public function __construct() { $this->set("\164\x79\160\145", "\x63\x75\163\164\157\155"); } public function className($JqsAq = '') { return $this->set("\143\154\x61\x73\x73\116\x61\155\x65", $JqsAq); } public function html($JqsAq = '') { return $this->set("\x68\x74\155\x6c", $JqsAq); } public function id($JqsAq = '') { return $this->set("\x69\144", $JqsAq); } public function inline($JqsAq = true) { return $this->set("\151\x6e\154\x69\x6e\145", $JqsAq); } public function name($JqsAq = '') { return $this->set("\x6e\x61\155\145", $JqsAq); } public function onMount($JqsAq = '') { return $this->set("\157\x6e\115\x6f\x75\156\164", $JqsAq); } public function onUnmount($JqsAq = '') { return $this->set("\x6f\156\125\x6e\155\157\x75\x6e\x74", $JqsAq); } public function onUpdate($JqsAq = '') { return $this->set("\157\x6e\125\160\x64\141\164\x65", $JqsAq); } public function type($JqsAq = "\x63\x75\x73\164\x6f\155") { return $this->set("\164\171\x70\145", $JqsAq); } }
