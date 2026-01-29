<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:24              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\160\157\x73\164"; public function getTitle() { return "\xe4\xbf\235\345\255\230\350\256\276\xe7\275\xae\351\xa1\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\43\43\43\x20\xe4\xbd\277\347\x94\250\350\257\xb4\346\230\x8e\xa\xa\55\40\xe6\x8e\xa5\xe5\x8f\243\350\xaf\267\xe6\xb1\202\xe6\x96\xb9\345\xbc\x8f\xe4\270\272\x20\x60\x50\117\123\x54\140\12\55\40\xe8\257\267\xe6\xb1\x82\345\217\x82\346\x95\260\344\270\272\xe6\225\xb0\xe7\xbb\x84\xe6\xa0\xbc\xe5\274\x8f\40\x28\345\260\x86\350\257\xa5\141\160\x69\344\275\x9c\xe4\xb8\xba\350\241\250\xe5\215\225\xe7\x9a\204\346\x8f\x90\344\xba\xa4\x61\160\151\xe5\215\xb3\xe5\x8f\257\346\xad\243\xe5\xb8\xb8\xe4\xbd\277\347\224\250\x29\12\xa\x60\140\140\x4a\x53\x4f\116\12\x7b\xa\x20\x20\x20\40\x22\163\x69\x74\145\x5f\156\141\155\x65\x22\72\40\42\163\x74\x72\x69\x6e\x67\42\54\xa\x20\x20\x20\x20\x22\x6e\x61\155\145\x22\72\x20\42\x73\x74\162\151\156\147\x22\x2c\xa\40\x20\40\40\x22\x61\x67\x65\x22\72\x20\60\xa\x7d\12\x60\x60\x60")]; } }
