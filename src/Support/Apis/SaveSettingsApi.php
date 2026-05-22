<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:21              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\160\x6f\163\x74"; public function getTitle() { return "\xe4\xbf\x9d\345\xad\230\350\256\xbe\xe7\xbd\256\351\xa1\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\43\43\x20\344\xbd\xbf\347\x94\xa8\xe8\xaf\264\xe6\230\216\12\12\55\40\xe6\216\xa5\345\x8f\243\xe8\xaf\267\xe6\261\202\xe6\226\271\xe5\274\217\344\270\xba\x20\140\x50\x4f\x53\x54\x60\12\55\40\350\xaf\xb7\346\xb1\202\345\x8f\202\346\x95\260\344\xb8\xba\346\x95\xb0\347\273\x84\xe6\xa0\274\345\274\x8f\x20\50\345\xb0\206\350\257\245\x61\160\x69\xe4\xbd\234\xe4\xb8\xba\xe8\xa1\xa8\xe5\x8d\225\xe7\x9a\x84\346\x8f\x90\344\xba\xa4\x61\x70\x69\xe5\x8d\xb3\xe5\217\257\346\xad\243\345\270\xb8\xe4\275\277\347\x94\xa8\51\xa\12\140\140\140\112\x53\117\116\12\x7b\12\40\40\40\x20\x22\163\151\x74\145\137\156\x61\155\145\x22\x3a\x20\x22\163\x74\162\151\156\x67\x22\54\xa\x20\40\x20\40\x22\156\x61\155\x65\42\72\40\42\x73\164\x72\x69\x6e\x67\42\x2c\12\40\40\40\x20\42\141\147\x65\x22\72\40\x30\12\175\xa\140\140\140")]; } }
