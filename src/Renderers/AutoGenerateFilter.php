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
 namespace DagaSmart\BizAdmin\Renderers; class AutoGenerateFilter extends BaseRenderer { public function __construct() { } public function columnsNum($JqsAq = '') { return $this->set("\143\157\154\x75\x6d\156\x73\x4e\x75\155", $JqsAq); } public function defaultCollapsed($JqsAq = true) { return $this->set("\x64\x65\146\x61\x75\154\164\103\157\x6c\x6c\x61\x70\163\145\x64", $JqsAq); } public function enableBulkActions($JqsAq = true) { return $this->set("\145\156\141\142\154\x65\102\165\x6c\x6b\101\143\164\x69\157\x6e\163", $JqsAq); } public function enableBulkActionsOn($JqsAq = '') { return $this->set("\145\x6e\141\142\x6c\145\102\x75\x6c\x6b\101\x63\164\151\157\x6e\x73\117\x6e", $JqsAq); } public function showBtnToolbar($JqsAq = true) { return $this->set("\x73\150\x6f\x77\x42\164\156\x54\157\x6f\x6c\142\141\x72", $JqsAq); } }
