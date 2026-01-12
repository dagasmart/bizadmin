<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\157\163\164"; public function getTitle() { return "\xe4\xbf\x9d\345\255\230\xe8\256\276\xe7\275\xae\351\xa1\xb9"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\43\43\x20\xe4\xbd\xbf\xe7\224\250\350\257\xb4\346\230\216\12\12\x2d\40\xe6\216\xa5\345\217\243\350\257\267\xe6\261\202\xe6\226\xb9\xe5\xbc\217\344\270\xba\40\140\120\117\123\124\140\12\x2d\x20\350\xaf\267\xe6\xb1\x82\xe5\x8f\202\346\225\260\xe4\270\272\346\x95\xb0\347\273\204\346\xa0\274\345\274\217\x20\x28\xe5\xb0\206\350\xaf\245\x61\160\151\344\275\x9c\344\xb8\272\xe8\241\250\345\x8d\225\xe7\232\x84\346\x8f\x90\344\272\xa4\x61\x70\x69\xe5\215\xb3\345\217\xaf\xe6\xad\243\xe5\270\xb8\xe4\275\277\347\224\xa8\51\xa\12\140\140\140\x4a\123\x4f\116\12\173\12\40\40\x20\40\42\163\151\x74\145\x5f\x6e\x61\x6d\145\42\x3a\x20\42\163\x74\162\x69\156\147\42\54\xa\40\40\40\x20\x22\x6e\141\x6d\145\x22\x3a\40\42\163\x74\x72\x69\x6e\x67\x22\x2c\xa\x20\x20\40\40\x22\141\x67\145\42\x3a\40\60\xa\x7d\12\140\140\x60")]; } }
