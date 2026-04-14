<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait CheckActionTrait { public function actionOfGetData() { return request()->_action == "\x67\x65\164\104\141\164\x61"; } public function actionOfExport() { return request()->_action == "\x65\x78\160\x6f\x72\x74"; } public function actionOfQuickEdit() { return request()->_action == "\x71\x75\x69\x63\153\x45\144\151\x74"; } public function actionOfQuickEditItem() { return request()->_action == "\x71\165\x69\143\x6b\105\x64\x69\164\111\164\x65\x6d"; } }
