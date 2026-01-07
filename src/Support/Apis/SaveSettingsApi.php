<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\x6f\163\164"; public function getTitle() { return "\xe4\277\x9d\345\xad\x98\350\xae\276\xe7\xbd\256\351\xa1\xb9"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\43\x23\40\xe4\xbd\277\xe7\x94\250\xe8\xaf\264\346\x98\x8e\xa\12\55\x20\346\216\245\xe5\x8f\xa3\350\xaf\xb7\xe6\xb1\202\346\x96\271\xe5\274\217\xe4\xb8\xba\40\x60\120\x4f\123\x54\140\12\55\x20\xe8\257\xb7\346\261\x82\345\217\x82\346\x95\260\344\xb8\272\xe6\225\260\xe7\xbb\x84\346\240\xbc\345\xbc\217\40\50\345\260\x86\350\257\245\x61\160\151\xe4\xbd\234\344\xb8\xba\xe8\xa1\xa8\345\x8d\x95\xe7\x9a\x84\346\217\x90\344\272\244\x61\160\151\xe5\215\263\xe5\x8f\257\xe6\255\243\xe5\xb8\xb8\xe4\xbd\xbf\347\x94\250\x29\12\12\140\140\140\112\123\117\x4e\12\173\xa\40\x20\x20\40\x22\163\151\x74\x65\x5f\156\x61\x6d\x65\42\72\40\x22\x73\x74\162\x69\x6e\147\42\54\xa\40\40\x20\40\x22\x6e\x61\x6d\145\42\72\x20\x22\163\x74\162\151\x6e\147\x22\x2c\xa\x20\40\40\40\42\x61\147\x65\x22\72\x20\60\xa\175\12\140\x60\140")]; } }
