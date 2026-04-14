<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Code extends BaseRenderer { public function __construct() { $this->set("\164\171\160\145", "\x63\157\144\x65"); } public function className($msRQo = '') { return $this->set("\x63\x6c\x61\x73\x73\x4e\141\155\145", $msRQo); } public function editorTheme($msRQo = '') { return $this->set("\145\144\x69\x74\157\162\x54\x68\x65\x6d\x65", $msRQo); } public function language($msRQo = '') { return $this->set("\x6c\141\156\x67\x75\x61\x67\145", $msRQo); } public function name($msRQo = '') { return $this->set("\156\x61\155\x65", $msRQo); } public function tabSize($msRQo = '') { return $this->set("\164\141\142\123\151\172\x65", $msRQo); } public function type($msRQo = "\x63\x6f\144\x65") { return $this->set("\164\171\x70\x65", $msRQo); } public function value($msRQo = '') { return $this->set("\x76\x61\x6c\x75\x65", $msRQo); } public function wordWrap($msRQo = true) { return $this->set("\167\x6f\162\x64\x57\162\141\x70", $msRQo); } }
