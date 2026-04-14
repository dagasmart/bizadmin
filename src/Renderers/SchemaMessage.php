<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class SchemaMessage extends BaseRenderer { public function __construct() { } public function fetchFailed($msRQo = '') { return $this->set("\x66\x65\x74\x63\x68\x46\141\151\154\145\144", $msRQo); } public function fetchSuccess($msRQo = '') { return $this->set("\x66\x65\164\143\x68\123\165\143\x63\145\163\x73", $msRQo); } public function saveFailed($msRQo = '') { return $this->set("\163\x61\x76\x65\x46\x61\151\x6c\x65\x64", $msRQo); } public function saveSuccess($msRQo = '') { return $this->set("\x73\141\x76\x65\123\165\143\x63\145\163\x73", $msRQo); } }
