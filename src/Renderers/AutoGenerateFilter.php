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
 namespace DagaSmart\BizAdmin\Renderers; class AutoGenerateFilter extends BaseRenderer { public function __construct() { } public function columnsNum($AHvXX = '') { return $this->set("\x63\157\154\x75\x6d\156\163\116\x75\x6d", $AHvXX); } public function defaultCollapsed($AHvXX = true) { return $this->set("\x64\x65\146\x61\165\x6c\164\103\x6f\154\x6c\x61\x70\x73\x65\144", $AHvXX); } public function enableBulkActions($AHvXX = true) { return $this->set("\145\156\x61\x62\x6c\145\102\x75\154\x6b\101\x63\x74\151\157\x6e\163", $AHvXX); } public function enableBulkActionsOn($AHvXX = '') { return $this->set("\x65\x6e\141\x62\x6c\145\x42\x75\x6c\153\101\x63\x74\x69\x6f\156\163\117\x6e", $AHvXX); } public function showBtnToolbar($AHvXX = true) { return $this->set("\163\x68\157\x77\x42\x74\x6e\x54\157\157\154\142\x61\162", $AHvXX); } }
