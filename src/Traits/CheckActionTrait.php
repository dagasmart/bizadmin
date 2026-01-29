<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait CheckActionTrait { public function actionOfGetData() { return request()->_action == "\x67\x65\x74\x44\141\164\x61"; } public function actionOfExport() { return request()->_action == "\145\x78\160\x6f\x72\x74"; } public function actionOfQuickEdit() { return request()->_action == "\x71\165\x69\143\x6b\105\x64\x69\164"; } public function actionOfQuickEditItem() { return request()->_action == "\x71\x75\151\x63\x6b\x45\x64\x69\x74\x49\x74\x65\155"; } }
