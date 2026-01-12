<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:00              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\x6f\163\x74"; public function getTitle() { return "\344\277\x9d\xe5\255\230\350\256\xbe\xe7\xbd\256\xe9\xa1\xb9"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\43\x23\x20\xe4\275\xbf\347\x94\250\350\xaf\264\xe6\x98\216\xa\12\55\x20\xe6\x8e\xa5\345\217\243\xe8\xaf\xb7\xe6\xb1\202\346\226\271\xe5\274\x8f\344\270\xba\x20\x60\x50\117\x53\124\x60\12\55\40\xe8\xaf\267\346\xb1\202\345\x8f\x82\xe6\225\xb0\xe4\270\xba\346\225\xb0\xe7\273\x84\xe6\240\xbc\xe5\274\217\40\x28\xe5\260\206\350\xaf\xa5\141\160\151\344\xbd\234\344\xb8\xba\350\241\xa8\xe5\x8d\225\xe7\232\204\xe6\x8f\220\344\xba\xa4\x61\160\x69\345\x8d\xb3\xe5\217\257\xe6\255\243\345\xb8\270\344\xbd\277\347\224\xa8\51\xa\12\x60\x60\x60\112\123\x4f\116\12\173\xa\40\40\40\40\x22\163\x69\x74\145\137\156\x61\x6d\145\42\72\40\x22\x73\x74\162\x69\156\x67\x22\54\xa\x20\40\40\x20\x22\x6e\x61\155\x65\x22\72\40\42\163\x74\x72\151\156\x67\42\54\xa\x20\x20\x20\x20\x22\141\x67\145\42\72\40\60\12\175\xa\140\140\x60")]; } }
