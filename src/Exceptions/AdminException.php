<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:17              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Exceptions; use Exception; class AdminException extends Exception { private $data; private $doNotDisplayToast; public function __construct($OjbSb = '', $MvDNw = array(), $t5cmC = 0) { goto ACbk1; ACbk1: parent::__construct($OjbSb); goto xeya0; U0ZfP: $this->doNotDisplayToast = $t5cmC; goto hbWKT; xeya0: $this->data = $MvDNw; goto U0ZfP; hbWKT: } public function render() { return admin_response()->doNotDisplayToast($this->doNotDisplayToast)->fail($this->getMessage(), $this->data); } public function report() { } }
