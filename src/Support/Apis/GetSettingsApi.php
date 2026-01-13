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
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\x67\x65\x74"; public function getTitle() { return "\xe8\x8e\267\345\x8f\226\350\256\xbe\347\xbd\xae\xe9\xa1\xb9"; } public function handle() { $Nc3_h = match ($this->getArgs("\155\157\x64\x65")) { "\x61\154\x6c" => settings()->all(), "\x70\141\x72\164" => collect(settings()->all())->filter(fn($uOLNF, $fey1V) => in_array($fey1V, $this->getArgs("\153\x65\171\163")))->toArray(), "\x6f\156\x65" => settings()->get($this->getArgs("\153\x65\x79")), }; return Admin::response()->success($Nc3_h); } public function argsSchema() { $RbZkd = collect(settings()->all())->keys()->map(fn($NtyWv) => ["\166\x61\x6c\165\x65" => $NtyWv, "\154\141\x62\x65\154" => $NtyWv])->toArray(); return [amis()->RadiosControl("\155\157\144\145", "\350\216\267\345\x8f\x96\346\xa8\241\xe5\274\217")->options([["\166\141\x6c\165\x65" => "\141\x6c\x6c", "\154\141\x62\145\x6c" => "\346\x89\x80\346\x9c\211"], ["\166\141\x6c\165\145" => "\160\x61\x72\x74", "\x6c\141\142\145\154" => "\351\203\xa8\345\x88\x86"], ["\166\x61\x6c\165\145" => "\157\156\x65", "\154\x61\142\x65\x6c" => "\xe5\x8d\x95\xe4\270\252"]])->selectFirst(), amis()->TextControl("\153\x65\171", "\xe8\256\276\347\xbd\256\351\241\271")->required()->visibleOn("\x24\173\155\x6f\x64\145\x20\75\75\40\x22\157\156\145\42\175")->options($RbZkd), amis()->ArrayControl("\153\145\x79\163", "\350\xae\276\347\xbd\xae\xe9\xa1\271")->required()->visibleOn("\44\x7b\155\157\x64\x65\x20\75\75\40\42\x70\x61\162\164\x22\x7d")->items([amis()->TextControl("\166\141\x6c\165\145")->required()->options($RbZkd)])]; } }
