<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Code extends BaseRenderer { public function __construct() { $this->set("\164\x79\x70\145", "\143\x6f\144\x65"); } public function className($PfrF0 = '') { return $this->set("\143\x6c\x61\163\163\116\x61\x6d\x65", $PfrF0); } public function editorTheme($PfrF0 = '') { return $this->set("\145\x64\x69\164\x6f\162\x54\150\x65\x6d\x65", $PfrF0); } public function language($PfrF0 = '') { return $this->set("\154\141\x6e\x67\165\x61\x67\x65", $PfrF0); } public function name($PfrF0 = '') { return $this->set("\156\141\155\x65", $PfrF0); } public function tabSize($PfrF0 = '') { return $this->set("\164\x61\x62\x53\x69\x7a\145", $PfrF0); } public function type($PfrF0 = "\143\x6f\144\145") { return $this->set("\x74\x79\160\145", $PfrF0); } public function value($PfrF0 = '') { return $this->set("\166\x61\154\x75\x65", $PfrF0); } public function wordWrap($PfrF0 = true) { return $this->set("\x77\x6f\162\x64\127\162\x61\x70", $PfrF0); } }
