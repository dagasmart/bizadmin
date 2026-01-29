<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\157\163\x74"; public function getTitle() { return "\xe4\277\235\345\xad\230\xe8\xae\276\347\275\xae\351\xa1\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\x23\x23\x20\344\xbd\xbf\347\224\250\350\257\xb4\xe6\230\216\xd\12\xd\12\55\40\346\216\245\xe5\217\xa3\xe8\257\xb7\xe6\xb1\x82\xe6\x96\271\345\274\217\344\270\xba\40\x60\x50\x4f\x53\124\140\xd\xa\x2d\x20\350\257\xb7\346\261\202\345\217\202\346\x95\260\344\270\272\xe6\225\260\347\273\204\346\xa0\xbc\xe5\xbc\217\40\50\345\260\x86\xe8\257\xa5\141\x70\x69\344\xbd\234\344\270\xba\350\xa1\xa8\xe5\215\225\347\x9a\x84\346\x8f\220\344\272\244\141\x70\x69\xe5\x8d\263\345\217\257\xe6\xad\243\xe5\270\270\xe4\xbd\277\347\x94\xa8\51\xd\12\15\xa\x60\x60\140\112\123\x4f\116\15\12\x7b\xd\12\40\x20\40\40\42\x73\x69\x74\145\137\x6e\141\x6d\145\42\72\40\x22\x73\x74\162\x69\x6e\147\x22\54\xd\xa\40\40\x20\40\x22\156\141\x6d\x65\x22\x3a\40\42\x73\164\162\151\156\147\x22\x2c\xd\12\40\40\40\x20\x22\x61\147\145\x22\72\x20\x30\xd\xa\x7d\xd\12\140\x60\x60")]; } }
