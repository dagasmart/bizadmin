<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:49              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\160\x6f\163\164"; public function getTitle() { return "\xe4\277\235\345\255\230\350\xae\276\347\xbd\xae\xe9\241\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\43\x23\43\x20\344\xbd\xbf\347\224\250\350\257\264\346\x98\216\12\12\55\x20\xe6\x8e\245\345\217\xa3\350\xaf\xb7\346\xb1\202\xe6\226\xb9\xe5\xbc\217\344\270\272\x20\x60\120\x4f\x53\x54\x60\12\x2d\40\xe8\xaf\267\xe6\xb1\202\xe5\x8f\202\346\225\260\xe4\xb8\272\xe6\225\xb0\347\273\x84\346\xa0\274\345\xbc\x8f\40\50\345\260\206\xe8\257\xa5\x61\x70\151\344\275\x9c\xe4\270\272\xe8\xa1\250\xe5\x8d\x95\xe7\x9a\204\346\x8f\220\xe4\272\xa4\141\160\151\xe5\215\xb3\345\217\xaf\xe6\255\243\345\270\xb8\344\275\277\xe7\224\250\51\xa\xa\140\x60\140\x4a\x53\x4f\116\12\x7b\xa\x20\40\40\40\x22\163\151\x74\145\x5f\x6e\x61\155\145\42\x3a\x20\x22\163\x74\x72\x69\x6e\x67\x22\54\xa\x20\40\40\x20\x22\156\x61\x6d\145\x22\x3a\40\x22\163\x74\x72\151\156\x67\42\54\12\x20\40\x20\40\x22\x61\x67\x65\42\72\x20\60\12\175\12\140\x60\x60")]; } }
