<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Exceptions; use DagaSmart\BizAdmin\Admin; use Exception; class AdminException extends Exception { private $data; private $doNotDisplayToast; public function __construct($OjbSb = '', $MvDNw = array(), $t5cmC = 0) { goto M594q; M594q: parent::__construct($OjbSb); goto QwJn1; Aswg4: $this->doNotDisplayToast = $t5cmC; goto h3MAi; QwJn1: $this->data = $MvDNw; goto Aswg4; h3MAi: } public function render() { return Admin::response()->doNotDisplayToast($this->doNotDisplayToast)->fail($this->getMessage(), $this->data); } public function report() { } }
