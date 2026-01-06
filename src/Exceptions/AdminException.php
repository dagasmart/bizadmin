<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Exceptions; use DagaSmart\BizAdmin\Admin; use Exception; class AdminException extends Exception { private $data; private $doNotDisplayToast; public function __construct($eUbOg = '', $PN11n = array(), $lGmzL = 0) { goto Mixaz; u_OW2: $this->data = $PN11n; goto hsxD6; hsxD6: $this->doNotDisplayToast = $lGmzL; goto EmbBl; Mixaz: parent::__construct($eUbOg); goto u_OW2; EmbBl: } public function render() { return Admin::response()->doNotDisplayToast($this->doNotDisplayToast)->fail($this->getMessage(), $this->data); } public function report() { } }
