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
 namespace DagaSmart\BizAdmin\Renderers; class SchemaMessage extends BaseRenderer { public function __construct() { } public function fetchFailed($w0aoq = '') { return $this->set("\x66\145\164\x63\x68\x46\x61\x69\154\x65\x64", $w0aoq); } public function fetchSuccess($w0aoq = '') { return $this->set("\x66\145\x74\x63\150\x53\165\x63\x63\145\163\163", $w0aoq); } public function saveFailed($w0aoq = '') { return $this->set("\163\x61\166\145\x46\x61\151\154\145\144", $w0aoq); } public function saveSuccess($w0aoq = '') { return $this->set("\163\141\x76\x65\123\x75\143\143\x65\x73\163", $w0aoq); } }
