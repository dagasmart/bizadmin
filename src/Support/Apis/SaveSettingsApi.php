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
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\160\x6f\163\x74"; public function getTitle() { return "\344\277\x9d\345\255\x98\350\256\xbe\347\275\256\351\241\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\43\x23\40\xe4\xbd\277\347\x94\xa8\350\257\264\346\230\216\15\xa\15\xa\55\x20\346\x8e\245\xe5\x8f\243\xe8\xaf\267\xe6\xb1\202\xe6\226\xb9\xe5\274\x8f\344\270\272\x20\x60\x50\117\123\124\140\15\12\x2d\40\xe8\257\267\xe6\261\202\xe5\217\202\346\225\xb0\344\xb8\272\346\x95\260\347\xbb\x84\xe6\240\274\345\xbc\x8f\x20\50\345\260\206\xe8\xaf\245\141\x70\151\xe4\xbd\x9c\xe4\xb8\272\xe8\xa1\xa8\xe5\215\x95\347\232\204\xe6\217\220\344\xba\244\x61\160\x69\xe5\215\xb3\345\217\257\346\255\243\345\270\270\xe4\275\xbf\347\224\xa8\x29\xd\12\xd\12\140\x60\x60\x4a\x53\117\x4e\xd\xa\173\xd\12\x20\x20\x20\40\42\x73\x69\164\x65\137\156\141\155\x65\42\72\x20\42\163\164\x72\151\156\x67\x22\x2c\15\12\40\40\x20\40\x22\156\141\x6d\x65\x22\x3a\x20\x22\163\x74\x72\x69\156\147\42\x2c\xd\xa\40\40\x20\x20\42\x61\x67\x65\42\x3a\40\60\xd\12\175\xd\xa\140\140\x60")]; } }
