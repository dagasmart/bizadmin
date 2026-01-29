<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class SchemaMessage extends BaseRenderer { public function __construct() { } public function fetchFailed($PfrF0 = '') { return $this->set("\146\x65\164\143\x68\x46\141\x69\x6c\x65\x64", $PfrF0); } public function fetchSuccess($PfrF0 = '') { return $this->set("\x66\x65\x74\143\x68\x53\x75\x63\x63\145\x73\163", $PfrF0); } public function saveFailed($PfrF0 = '') { return $this->set("\163\x61\x76\145\106\x61\x69\154\x65\144", $PfrF0); } public function saveSuccess($PfrF0 = '') { return $this->set("\x73\141\x76\x65\123\x75\x63\143\x65\163\x73", $PfrF0); } }
