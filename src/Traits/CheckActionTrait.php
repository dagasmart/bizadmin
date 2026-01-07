<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait CheckActionTrait { public function actionOfGetData() { return request()->_action == "\x67\x65\164\x44\141\x74\141"; } public function actionOfExport() { return request()->_action == "\x65\170\160\x6f\162\x74"; } public function actionOfQuickEdit() { return request()->_action == "\161\x75\151\x63\x6b\x45\144\151\x74"; } public function actionOfQuickEditItem() { return request()->_action == "\x71\x75\x69\x63\153\x45\x64\151\164\111\164\x65\x6d"; } }
