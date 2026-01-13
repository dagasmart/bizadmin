<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:49              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait CheckActionTrait { public function actionOfGetData() { return request()->_action == "\147\145\x74\104\x61\x74\x61"; } public function actionOfExport() { return request()->_action == "\145\170\x70\157\x72\164"; } public function actionOfQuickEdit() { return request()->_action == "\x71\165\151\143\x6b\x45\144\x69\164"; } public function actionOfQuickEditItem() { return request()->_action == "\161\x75\151\143\153\x45\x64\151\x74\x49\164\x65\x6d"; } }
