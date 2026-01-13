<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class SchemaMessage extends BaseRenderer { public function __construct() { } public function fetchFailed($JqsAq = '') { return $this->set("\146\x65\164\x63\x68\106\141\151\154\x65\144", $JqsAq); } public function fetchSuccess($JqsAq = '') { return $this->set("\x66\145\x74\x63\150\x53\165\x63\x63\x65\163\x73", $JqsAq); } public function saveFailed($JqsAq = '') { return $this->set("\x73\141\x76\145\106\141\x69\154\145\144", $JqsAq); } public function saveSuccess($JqsAq = '') { return $this->set("\163\141\x76\145\123\165\143\x63\x65\163\x73", $JqsAq); } }
