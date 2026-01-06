<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\160\x6f\163\164"; public function getTitle() { return "\xe4\277\x9d\345\xad\230\350\256\xbe\347\275\xae\351\241\xb9"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\43\43\x23\40\xe4\xbd\xbf\xe7\x94\250\xe8\257\xb4\xe6\230\x8e\xa\12\55\40\xe6\216\245\xe5\217\xa3\xe8\xaf\267\346\261\x82\xe6\x96\271\xe5\274\217\xe4\270\xba\x20\140\x50\117\x53\124\140\xa\x2d\x20\350\xaf\xb7\xe6\261\x82\345\x8f\202\346\x95\260\xe4\xb8\272\346\225\xb0\xe7\xbb\204\346\240\274\345\xbc\217\40\50\xe5\260\x86\350\257\245\141\160\151\xe4\xbd\234\xe4\270\272\xe8\241\xa8\xe5\x8d\225\xe7\x9a\x84\xe6\217\220\344\xba\244\141\160\x69\345\x8d\xb3\345\217\xaf\346\xad\xa3\345\270\xb8\344\xbd\277\347\224\250\51\xa\12\140\x60\x60\x4a\123\x4f\x4e\12\173\12\40\x20\40\x20\x22\x73\x69\x74\145\x5f\x6e\x61\155\145\42\72\40\x22\163\x74\x72\151\x6e\147\42\x2c\xa\x20\x20\40\40\x22\156\x61\155\145\x22\x3a\x20\x22\163\164\162\151\156\x67\42\x2c\xa\40\x20\x20\x20\x22\x61\x67\145\x22\72\x20\60\xa\175\12\x60\x60\x60")]; } }
