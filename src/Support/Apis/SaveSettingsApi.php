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
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\x6f\163\x74"; public function getTitle() { return "\xe4\277\x9d\345\xad\230\xe8\256\276\347\275\xae\xe9\241\xb9"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\x23\x23\x20\344\xbd\277\xe7\x94\xa8\xe8\xaf\xb4\xe6\230\x8e\xa\12\55\x20\xe6\x8e\xa5\xe5\217\243\xe8\xaf\xb7\xe6\261\x82\346\226\xb9\345\xbc\x8f\xe4\xb8\272\40\x60\x50\117\123\124\140\12\x2d\40\xe8\xaf\xb7\xe6\xb1\202\345\217\202\xe6\x95\xb0\xe4\270\272\346\x95\xb0\347\xbb\204\346\xa0\xbc\xe5\274\x8f\x20\50\345\xb0\206\350\257\245\x61\160\x69\344\275\234\344\xb8\272\xe8\241\250\345\215\x95\347\232\204\346\217\x90\344\xba\xa4\141\x70\x69\xe5\x8d\xb3\xe5\x8f\xaf\346\xad\xa3\345\270\270\xe4\275\277\347\x94\250\x29\xa\xa\140\140\x60\112\x53\x4f\116\12\173\12\x20\x20\x20\40\x22\163\x69\x74\x65\137\156\x61\155\145\x22\x3a\x20\x22\x73\x74\x72\151\x6e\147\x22\54\12\x20\40\x20\40\x22\156\141\x6d\145\x22\x3a\x20\x22\163\x74\x72\151\x6e\147\42\x2c\xa\x20\x20\40\40\42\x61\147\145\42\x3a\x20\60\xa\x7d\12\x60\x60\140")]; } }
