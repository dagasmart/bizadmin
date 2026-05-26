<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:17              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\157\x73\x74"; public function getTitle() { return admin_trans("\141\144\155\151\156\56\x61\160\151\137\x74\x65\x6d\x70\154\141\164\145\163\x2e\163\141\x76\x65\137\x73\x65\164\164\151\x6e\147\x73"); } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value(admin_trans("\x61\x64\x6d\151\x6e\x2e\141\x70\x69\x5f\x74\145\155\x70\154\141\x74\145\163\56\163\141\166\145\137\x73\145\164\164\151\156\147\163\137\144\x65\x73\x63\162\151\x70\164\x69\157\156"))]; } }
