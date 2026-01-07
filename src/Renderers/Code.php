<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Code extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\x65", "\143\157\144\x65"); } public function className($w0aoq = '') { return $this->set("\143\154\141\x73\163\116\x61\x6d\x65", $w0aoq); } public function editorTheme($w0aoq = '') { return $this->set("\x65\144\x69\164\x6f\162\x54\150\145\x6d\145", $w0aoq); } public function language($w0aoq = '') { return $this->set("\154\x61\156\147\x75\x61\147\145", $w0aoq); } public function name($w0aoq = '') { return $this->set("\x6e\x61\x6d\x65", $w0aoq); } public function tabSize($w0aoq = '') { return $this->set("\x74\141\142\x53\x69\x7a\145", $w0aoq); } public function type($w0aoq = "\x63\157\x64\x65") { return $this->set("\164\x79\x70\145", $w0aoq); } public function value($w0aoq = '') { return $this->set("\x76\x61\154\165\145", $w0aoq); } public function wordWrap($w0aoq = true) { return $this->set("\167\x6f\x72\x64\127\162\x61\x70", $w0aoq); } }
