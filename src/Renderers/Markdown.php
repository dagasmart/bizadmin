<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:42              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Markdown extends BaseRenderer { public function __construct() { $this->set("\164\171\160\145", "\x6d\x61\x72\x6b\144\x6f\167\156"); } public function className($AHvXX = '') { return $this->set("\143\x6c\x61\163\x73\116\x61\x6d\145", $AHvXX); } public function name($AHvXX = '') { return $this->set("\156\x61\155\x65", $AHvXX); } public function options($AHvXX = '') { return $this->set("\x6f\160\x74\151\x6f\156\x73", $AHvXX); } public function src($AHvXX = '') { return $this->set("\163\162\143", $AHvXX); } public function type($AHvXX = "\155\x61\x72\x6b\144\x6f\167\x6e") { return $this->set("\x74\x79\x70\145", $AHvXX); } public function value($AHvXX = '') { return $this->set("\166\141\154\165\x65", $AHvXX); } }
