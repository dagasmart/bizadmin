<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:21              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Markdown extends BaseRenderer { public function __construct() { $this->set("\164\171\x70\x65", "\x6d\x61\162\153\x64\157\x77\x6e"); } public function className($w0aoq = '') { return $this->set("\x63\154\x61\163\x73\x4e\x61\x6d\x65", $w0aoq); } public function name($w0aoq = '') { return $this->set("\x6e\141\155\x65", $w0aoq); } public function options($w0aoq = '') { return $this->set("\x6f\x70\x74\151\x6f\x6e\163", $w0aoq); } public function src($w0aoq = '') { return $this->set("\163\162\143", $w0aoq); } public function type($w0aoq = "\155\141\x72\153\x64\x6f\167\x6e") { return $this->set("\x74\x79\160\x65", $w0aoq); } public function value($w0aoq = '') { return $this->set("\166\x61\x6c\x75\x65", $w0aoq); } }
