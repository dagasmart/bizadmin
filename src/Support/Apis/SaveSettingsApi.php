<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\160\157\x73\x74"; public function getTitle() { return "\xe4\277\235\345\255\230\xe8\256\276\xe7\275\xae\xe9\241\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\43\x23\x23\40\xe4\275\xbf\xe7\224\xa8\xe8\xaf\264\346\x98\216\xa\12\55\x20\xe6\216\245\345\x8f\xa3\xe8\xaf\xb7\346\261\202\xe6\x96\271\345\274\x8f\xe4\270\xba\40\140\120\x4f\x53\x54\140\12\x2d\x20\350\257\xb7\346\261\x82\345\x8f\202\346\225\260\344\xb8\272\346\x95\260\347\xbb\204\346\240\274\345\xbc\217\x20\x28\xe5\260\206\350\257\xa5\141\160\151\xe4\xbd\234\xe4\xb8\272\350\xa1\250\xe5\215\x95\xe7\232\x84\xe6\x8f\220\xe4\272\xa4\x61\x70\151\345\215\263\xe5\x8f\257\xe6\255\243\xe5\xb8\xb8\344\275\xbf\347\224\250\51\xa\12\140\140\x60\112\123\117\x4e\12\x7b\12\x20\x20\40\x20\x22\163\151\164\145\x5f\156\141\x6d\x65\42\x3a\x20\x22\163\164\x72\x69\x6e\147\42\54\12\40\40\x20\x20\x22\156\141\x6d\x65\42\x3a\x20\x22\163\x74\x72\151\x6e\147\x22\54\12\x20\40\x20\40\42\141\x67\x65\42\x3a\40\60\12\x7d\xa\140\140\x60")]; } }
