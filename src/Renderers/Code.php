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
 namespace DagaSmart\BizAdmin\Renderers; class Code extends BaseRenderer { public function __construct() { $this->set("\164\x79\x70\x65", "\143\x6f\x64\x65"); } public function className($JqsAq = '') { return $this->set("\143\154\141\163\x73\116\141\155\145", $JqsAq); } public function editorTheme($JqsAq = '') { return $this->set("\145\144\151\x74\157\162\x54\x68\145\x6d\145", $JqsAq); } public function language($JqsAq = '') { return $this->set("\x6c\x61\156\x67\x75\141\147\145", $JqsAq); } public function name($JqsAq = '') { return $this->set("\156\141\155\145", $JqsAq); } public function tabSize($JqsAq = '') { return $this->set("\x74\141\142\x53\151\x7a\145", $JqsAq); } public function type($JqsAq = "\143\x6f\x64\x65") { return $this->set("\164\171\160\145", $JqsAq); } public function value($JqsAq = '') { return $this->set("\166\141\154\165\x65", $JqsAq); } public function wordWrap($JqsAq = true) { return $this->set("\167\157\162\144\127\x72\x61\x70", $JqsAq); } }
