<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait CheckActionTrait { public function actionOfGetData() { return request()->_action == "\147\145\164\x44\141\x74\141"; } public function actionOfExport() { return request()->_action == "\x65\x78\x70\157\162\164"; } public function actionOfQuickEdit() { return request()->_action == "\161\165\x69\143\153\x45\x64\151\164"; } public function actionOfQuickEditItem() { return request()->_action == "\161\165\x69\143\153\105\144\151\164\111\x74\x65\155"; } }
