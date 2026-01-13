<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Barcode extends BaseRenderer { public function __construct() { $this->set("\x74\x79\160\145", "\x62\141\162\x63\157\144\145"); } public function className($JqsAq = '') { return $this->set("\143\154\x61\163\163\116\141\155\145", $JqsAq); } public function type($JqsAq = "\x62\141\162\x63\157\144\145") { return $this->set("\164\x79\160\145", $JqsAq); } }
