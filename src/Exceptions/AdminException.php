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
 namespace DagaSmart\BizAdmin\Exceptions; use DagaSmart\BizAdmin\Admin; use Exception; class AdminException extends Exception { private $data; private $doNotDisplayToast; public function __construct($IbShN = '', $Nc3_h = array(), $Ukk67 = 0) { goto jcFHE; jcFHE: parent::__construct($IbShN); goto yEuiR; yEuiR: $this->data = $Nc3_h; goto H0t37; H0t37: $this->doNotDisplayToast = $Ukk67; goto mp97q; mp97q: } public function render() { return Admin::response()->doNotDisplayToast($this->doNotDisplayToast)->fail($this->getMessage(), $this->data); } public function report() { } }
