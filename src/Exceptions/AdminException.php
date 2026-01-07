<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Exceptions; use DagaSmart\BizAdmin\Admin; use Exception; class AdminException extends Exception { private $data; private $doNotDisplayToast; public function __construct($Y78SV = '', $OFJRl = array(), $teP79 = 0) { goto ZNVaS; KuC9J: $this->data = $OFJRl; goto L2UMT; L2UMT: $this->doNotDisplayToast = $teP79; goto znpyX; ZNVaS: parent::__construct($Y78SV); goto KuC9J; znpyX: } public function render() { return Admin::response()->doNotDisplayToast($this->doNotDisplayToast)->fail($this->getMessage(), $this->data); } public function report() { } }
