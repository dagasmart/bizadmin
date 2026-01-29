<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Exceptions; use DagaSmart\BizAdmin\Admin; use Exception; class AdminException extends Exception { private $data; private $doNotDisplayToast; public function __construct($kKyHM = '', $Scqzw = array(), $ZGNmW = 0) { goto JorU4; cxRVd: $this->data = $Scqzw; goto xUNp7; xUNp7: $this->doNotDisplayToast = $ZGNmW; goto NHnti; JorU4: parent::__construct($kKyHM); goto cxRVd; NHnti: } public function render() { return Admin::response()->doNotDisplayToast($this->doNotDisplayToast)->fail($this->getMessage(), $this->data); } public function report() { } }
