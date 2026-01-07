<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\x6f\x73\164"; public function getTitle() { return "\344\xbf\x9d\345\255\x98\350\256\xbe\xe7\xbd\256\xe9\xa1\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\x23\43\40\344\xbd\xbf\347\224\250\xe8\xaf\xb4\346\230\216\12\12\55\40\xe6\x8e\245\345\x8f\xa3\350\xaf\267\346\261\x82\346\x96\271\xe5\xbc\217\344\270\xba\40\140\120\x4f\123\124\x60\xa\x2d\40\xe8\xaf\xb7\346\xb1\202\345\x8f\x82\xe6\x95\xb0\344\270\xba\xe6\225\260\347\xbb\x84\xe6\xa0\274\345\xbc\217\x20\50\345\260\206\350\xaf\245\x61\160\151\344\xbd\x9c\344\xb8\xba\350\241\250\345\215\x95\xe7\x9a\204\346\x8f\x90\xe4\272\xa4\141\160\x69\345\x8d\xb3\xe5\x8f\257\346\255\xa3\345\xb8\270\xe4\xbd\xbf\347\x94\250\51\xa\xa\x60\x60\x60\112\x53\x4f\116\12\173\12\x20\40\40\40\42\x73\x69\x74\145\137\156\x61\x6d\145\x22\x3a\x20\x22\x73\x74\162\151\x6e\147\x22\54\xa\40\x20\40\x20\42\156\x61\155\x65\42\x3a\x20\42\x73\164\x72\x69\x6e\147\x22\x2c\12\x20\x20\40\x20\x22\141\147\x65\42\72\40\60\xa\175\xa\140\x60\140")]; } }
