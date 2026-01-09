<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\160\x6f\x73\x74"; public function getTitle() { return "\344\xbf\235\345\255\230\xe8\256\276\xe7\xbd\xae\xe9\xa1\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\43\x23\x20\344\xbd\277\347\x94\xa8\xe8\257\xb4\346\x98\216\xa\xa\x2d\x20\xe6\x8e\245\345\x8f\243\xe8\xaf\xb7\xe6\xb1\202\xe6\226\xb9\345\xbc\x8f\344\270\272\40\140\x50\117\123\x54\x60\xa\x2d\40\350\xaf\xb7\346\261\202\xe5\x8f\x82\xe6\x95\xb0\344\270\xba\346\x95\260\xe7\xbb\204\xe6\240\xbc\xe5\274\217\x20\x28\345\xb0\x86\xe8\xaf\245\141\160\x69\344\xbd\234\344\270\xba\350\xa1\250\345\x8d\x95\347\x9a\204\xe6\217\220\xe4\272\244\x61\160\151\xe5\x8d\263\345\217\257\xe6\xad\243\xe5\xb8\xb8\344\xbd\277\xe7\x94\xa8\x29\xa\12\x60\x60\140\x4a\123\x4f\116\xa\x7b\xa\x20\40\40\40\x22\x73\151\x74\145\x5f\156\141\155\145\42\72\40\42\163\164\x72\151\x6e\147\42\x2c\xa\x20\40\40\x20\x22\x6e\141\x6d\145\42\x3a\40\x22\x73\164\162\x69\x6e\x67\x22\x2c\xa\x20\40\40\x20\x22\141\147\145\42\x3a\x20\x30\12\x7d\xa\x60\140\x60")]; } }
