<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\157\163\x74"; public function getTitle() { return "\344\277\x9d\345\255\230\350\256\276\xe7\xbd\256\xe9\241\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\43\43\43\40\344\275\xbf\347\224\xa8\350\257\264\346\x98\216\xa\xa\55\40\xe6\216\xa5\xe5\x8f\xa3\350\257\267\346\xb1\x82\xe6\226\271\xe5\xbc\x8f\xe4\xb8\xba\40\140\x50\117\123\124\x60\xa\55\40\xe8\257\xb7\346\xb1\x82\xe5\x8f\x82\xe6\x95\xb0\344\270\xba\xe6\x95\xb0\347\xbb\x84\346\240\xbc\xe5\274\x8f\40\50\345\xb0\206\350\xaf\245\141\160\151\344\275\234\xe4\270\xba\350\xa1\xa8\345\215\225\xe7\232\204\xe6\x8f\220\344\272\244\x61\x70\151\345\x8d\263\345\x8f\257\xe6\xad\243\xe5\xb8\xb8\xe4\xbd\277\347\x94\xa8\x29\xa\xa\x60\140\x60\x4a\123\117\x4e\12\x7b\xa\40\x20\40\x20\42\x73\151\x74\145\x5f\x6e\x61\x6d\x65\42\72\40\42\x73\164\162\151\156\147\x22\x2c\xa\40\x20\x20\x20\x22\156\141\155\x65\x22\x3a\40\x22\x73\x74\162\151\x6e\x67\x22\x2c\xa\40\40\x20\40\42\141\x67\x65\x22\x3a\40\x30\xa\175\xa\140\140\x60")]; } }
