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
 namespace DagaSmart\BizAdmin\Renderers; class Markdown extends BaseRenderer { public function __construct() { $this->set("\164\171\160\x65", "\x6d\141\x72\153\144\x6f\167\x6e"); } public function className($JqsAq = '') { return $this->set("\143\154\x61\x73\163\x4e\x61\155\145", $JqsAq); } public function name($JqsAq = '') { return $this->set("\x6e\x61\x6d\145", $JqsAq); } public function options($JqsAq = '') { return $this->set("\157\160\x74\151\157\156\x73", $JqsAq); } public function src($JqsAq = '') { return $this->set("\x73\162\143", $JqsAq); } public function type($JqsAq = "\x6d\141\x72\153\x64\157\167\156") { return $this->set("\x74\171\x70\x65", $JqsAq); } public function value($JqsAq = '') { return $this->set("\x76\141\154\x75\x65", $JqsAq); } }
