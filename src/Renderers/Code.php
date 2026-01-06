<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Code extends BaseRenderer { public function __construct() { $this->set("\x74\x79\x70\145", "\143\157\144\145"); } public function className($AHvXX = '') { return $this->set("\x63\x6c\141\163\x73\x4e\141\x6d\145", $AHvXX); } public function editorTheme($AHvXX = '') { return $this->set("\x65\144\151\x74\157\162\124\x68\145\x6d\145", $AHvXX); } public function language($AHvXX = '') { return $this->set("\x6c\x61\x6e\x67\165\141\147\x65", $AHvXX); } public function name($AHvXX = '') { return $this->set("\156\x61\155\x65", $AHvXX); } public function tabSize($AHvXX = '') { return $this->set("\164\141\142\x53\x69\x7a\145", $AHvXX); } public function type($AHvXX = "\143\157\x64\x65") { return $this->set("\164\x79\160\145", $AHvXX); } public function value($AHvXX = '') { return $this->set("\166\x61\x6c\165\145", $AHvXX); } public function wordWrap($AHvXX = true) { return $this->set("\x77\x6f\x72\144\127\162\141\160", $AHvXX); } }
