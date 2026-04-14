<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\160\157\163\164"; public function getTitle() { return "\344\277\235\xe5\xad\x98\350\256\276\347\275\256\xe9\241\xb9"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\43\43\40\xe4\xbd\277\347\x94\xa8\xe8\xaf\xb4\xe6\230\216\xa\12\55\40\xe6\x8e\xa5\xe5\x8f\xa3\xe8\xaf\267\346\261\202\346\226\xb9\345\274\217\344\270\xba\40\140\x50\x4f\x53\124\140\xa\x2d\40\350\257\267\346\xb1\202\345\x8f\x82\xe6\x95\260\xe4\270\xba\xe6\225\xb0\347\273\x84\xe6\xa0\274\345\274\217\x20\50\xe5\260\206\xe8\257\245\141\160\x69\xe4\275\x9c\xe4\270\272\350\xa1\xa8\345\215\225\347\232\x84\346\217\x90\344\272\244\141\x70\x69\345\215\xb3\xe5\x8f\257\346\255\243\xe5\270\xb8\xe4\xbd\277\347\x94\xa8\x29\xa\12\140\140\x60\x4a\x53\117\116\xa\x7b\xa\x20\40\40\40\x22\x73\151\x74\145\x5f\156\x61\155\145\42\x3a\40\42\x73\x74\x72\151\x6e\147\42\54\xa\40\40\x20\40\42\156\141\x6d\x65\42\x3a\40\x22\163\164\162\151\x6e\x67\x22\54\xa\x20\x20\x20\x20\42\141\147\x65\x22\72\x20\60\xa\175\12\x60\140\x60")]; } }
