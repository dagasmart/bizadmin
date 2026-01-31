<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\x6f\x73\164"; public function getTitle() { return "\344\xbf\235\345\255\x98\350\256\xbe\347\275\xae\xe9\xa1\xb9"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\43\43\x23\x20\xe4\275\277\347\x94\250\xe8\257\264\346\x98\x8e\15\xa\15\12\55\40\xe6\x8e\245\345\x8f\243\350\257\xb7\346\261\x82\346\226\271\345\274\217\344\270\xba\x20\140\120\117\123\124\140\15\xa\55\x20\350\257\267\346\261\x82\xe5\217\x82\346\x95\260\344\270\272\xe6\x95\xb0\347\xbb\x84\346\xa0\274\xe5\274\x8f\x20\50\345\xb0\x86\350\xaf\245\x61\x70\x69\344\275\234\xe4\270\xba\xe8\241\250\345\215\225\347\232\204\xe6\217\220\344\272\xa4\141\x70\151\345\215\263\xe5\217\xaf\346\255\xa3\345\xb8\270\xe4\275\xbf\347\224\250\51\xd\12\xd\12\x60\140\x60\x4a\123\x4f\x4e\15\12\x7b\xd\xa\x20\x20\40\40\42\x73\151\164\145\137\156\x61\155\145\x22\72\x20\42\x73\x74\162\x69\x6e\x67\x22\x2c\15\xa\x20\40\40\x20\42\x6e\141\155\145\42\x3a\40\42\163\164\x72\x69\156\x67\42\x2c\15\12\40\x20\40\40\x22\141\x67\x65\x22\x3a\40\60\xd\12\175\xd\12\x60\x60\140")]; } }
