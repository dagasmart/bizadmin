<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\x6f\163\164"; public function getTitle() { return "\xe4\xbf\x9d\345\xad\230\350\xae\276\347\275\xae\xe9\xa1\xb9"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\43\43\40\344\275\xbf\347\x94\xa8\350\257\264\346\230\x8e\15\xa\15\xa\55\x20\346\x8e\245\345\x8f\243\350\xaf\xb7\346\261\202\346\x96\xb9\345\274\x8f\xe4\270\xba\x20\140\x50\x4f\123\124\140\15\xa\x2d\40\xe8\xaf\xb7\346\xb1\202\345\x8f\202\346\225\xb0\xe4\xb8\272\xe6\x95\260\xe7\xbb\x84\346\240\xbc\xe5\xbc\217\x20\x28\345\260\x86\xe8\257\245\141\160\151\xe4\275\234\344\xb8\272\xe8\xa1\xa8\xe5\215\x95\347\232\204\346\217\220\344\xba\xa4\x61\160\x69\xe5\215\263\345\217\257\xe6\255\243\345\xb8\270\344\xbd\277\347\x94\xa8\51\xd\12\15\xa\x60\140\140\112\123\117\x4e\xd\12\x7b\xd\12\40\x20\40\40\x22\163\x69\x74\x65\137\x6e\x61\155\145\42\72\40\x22\163\x74\162\151\156\147\x22\x2c\15\12\x20\40\x20\40\42\x6e\x61\155\145\x22\x3a\x20\42\x73\164\162\151\x6e\x67\x22\x2c\xd\12\40\x20\40\40\x22\x61\147\145\42\x3a\x20\60\xd\12\175\15\xa\140\x60\x60")]; } }
