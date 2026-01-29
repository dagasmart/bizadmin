<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class AutoGenerateFilter extends BaseRenderer { public function __construct() { } public function columnsNum($PfrF0 = '') { return $this->set("\143\x6f\x6c\165\155\156\163\x4e\x75\x6d", $PfrF0); } public function defaultCollapsed($PfrF0 = true) { return $this->set("\x64\x65\x66\141\x75\x6c\164\103\157\x6c\x6c\x61\160\x73\145\144", $PfrF0); } public function enableBulkActions($PfrF0 = true) { return $this->set("\x65\156\x61\x62\154\145\102\x75\x6c\153\101\143\x74\151\x6f\x6e\x73", $PfrF0); } public function enableBulkActionsOn($PfrF0 = '') { return $this->set("\x65\156\x61\142\154\x65\x42\x75\x6c\x6b\101\143\x74\151\x6f\156\x73\117\156", $PfrF0); } public function showBtnToolbar($PfrF0 = true) { return $this->set("\163\150\157\167\102\x74\156\x54\x6f\x6f\x6c\x62\x61\x72", $PfrF0); } }
