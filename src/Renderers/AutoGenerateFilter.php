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
 namespace DagaSmart\BizAdmin\Renderers; class AutoGenerateFilter extends BaseRenderer { public function __construct() { } public function columnsNum($w0aoq = '') { return $this->set("\143\157\154\x75\x6d\156\163\116\165\x6d", $w0aoq); } public function defaultCollapsed($w0aoq = true) { return $this->set("\x64\x65\x66\141\165\154\164\103\x6f\x6c\154\141\x70\x73\145\144", $w0aoq); } public function enableBulkActions($w0aoq = true) { return $this->set("\x65\156\x61\142\154\x65\x42\x75\154\x6b\101\x63\x74\x69\157\x6e\163", $w0aoq); } public function enableBulkActionsOn($w0aoq = '') { return $this->set("\145\x6e\x61\x62\x6c\x65\x42\x75\x6c\x6b\x41\143\x74\x69\157\x6e\x73\117\156", $w0aoq); } public function showBtnToolbar($w0aoq = true) { return $this->set("\x73\x68\x6f\x77\x42\x74\156\x54\157\x6f\x6c\x62\x61\x72", $w0aoq); } }
