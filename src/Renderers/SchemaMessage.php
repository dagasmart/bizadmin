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
 namespace DagaSmart\BizAdmin\Renderers; class SchemaMessage extends BaseRenderer { public function __construct() { } public function fetchFailed($AHvXX = '') { return $this->set("\x66\145\164\143\150\x46\x61\x69\x6c\145\x64", $AHvXX); } public function fetchSuccess($AHvXX = '') { return $this->set("\146\x65\164\143\x68\123\x75\x63\x63\x65\163\x73", $AHvXX); } public function saveFailed($AHvXX = '') { return $this->set("\163\x61\x76\145\x46\141\x69\x6c\x65\144", $AHvXX); } public function saveSuccess($AHvXX = '') { return $this->set("\x73\141\166\x65\123\x75\143\x63\145\x73\163", $AHvXX); } }
