<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class AutoGenerateFilter extends BaseRenderer { public function __construct() { } public function columnsNum($msRQo = '') { return $this->set("\143\x6f\x6c\165\x6d\156\163\116\165\155", $msRQo); } public function defaultCollapsed($msRQo = true) { return $this->set("\x64\145\146\141\165\x6c\164\x43\x6f\154\154\141\x70\x73\145\x64", $msRQo); } public function enableBulkActions($msRQo = true) { return $this->set("\x65\156\141\x62\x6c\x65\x42\x75\x6c\153\101\x63\x74\151\157\156\x73", $msRQo); } public function enableBulkActionsOn($msRQo = '') { return $this->set("\145\156\141\142\154\145\x42\x75\154\153\101\143\x74\x69\157\156\163\x4f\x6e", $msRQo); } public function showBtnToolbar($msRQo = true) { return $this->set("\163\150\x6f\167\102\164\x6e\124\157\157\x6c\142\x61\162", $msRQo); } }
