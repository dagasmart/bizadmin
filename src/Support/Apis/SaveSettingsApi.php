<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\160\157\163\x74"; public function getTitle() { return "\344\xbf\x9d\345\255\x98\xe8\256\xbe\xe7\275\xae\351\xa1\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\43\x23\43\40\344\xbd\xbf\347\x94\250\xe8\257\264\346\x98\x8e\xa\12\x2d\40\346\216\xa5\xe5\217\xa3\xe8\xaf\xb7\346\xb1\202\346\226\271\xe5\xbc\217\xe4\xb8\xba\x20\x60\120\x4f\x53\x54\x60\xa\x2d\x20\xe8\257\267\346\261\202\xe5\x8f\x82\346\x95\xb0\xe4\270\272\346\225\xb0\xe7\273\x84\xe6\240\xbc\345\xbc\x8f\40\50\xe5\260\206\xe8\257\245\141\160\151\344\275\x9c\344\270\272\xe8\241\250\345\x8d\x95\347\232\204\346\x8f\220\xe4\xba\244\141\x70\x69\345\x8d\xb3\345\217\xaf\xe6\255\243\xe5\xb8\xb8\344\xbd\277\347\x94\xa8\x29\xa\xa\140\140\x60\112\x53\117\116\xa\x7b\xa\x20\40\x20\x20\x22\163\151\x74\145\x5f\x6e\x61\155\x65\x22\x3a\40\x22\x73\x74\162\x69\156\147\42\54\xa\40\40\40\40\x22\156\x61\x6d\x65\42\x3a\x20\x22\x73\x74\x72\x69\156\147\x22\54\xa\40\x20\x20\x20\42\141\x67\145\x22\x3a\x20\60\12\x7d\12\x60\x60\140")]; } }
