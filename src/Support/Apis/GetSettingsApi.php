<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\x65\164"; public function getTitle() { return "\xe8\x8e\xb7\xe5\x8f\x96\350\xae\276\xe7\275\xae\xe9\xa1\xb9"; } public function handle() { $iYkCE = match ($this->getArgs("\x6d\157\x64\145")) { "\141\154\x6c" => settings()->all(), "\x70\141\x72\164" => collect(settings()->all())->filter(fn($RIwTe, $F4i84) => in_array($F4i84, $this->getArgs("\x6b\145\171\163")))->toArray(), "\157\156\x65" => settings()->get($this->getArgs("\153\145\x79")), }; return Admin::response()->success($iYkCE); } public function argsSchema() { $fx9wf = collect(settings()->all())->keys()->map(fn($HsTJG) => ["\x76\141\154\165\145" => $HsTJG, "\154\x61\142\145\x6c" => $HsTJG])->toArray(); return [amis()->RadiosControl("\155\x6f\144\x65", "\350\x8e\267\xe5\217\x96\346\250\241\345\274\217")->options([["\x76\141\x6c\165\145" => "\141\x6c\x6c", "\154\141\142\x65\x6c" => "\xe6\x89\200\346\234\x89"], ["\x76\x61\154\165\145" => "\x70\x61\x72\x74", "\154\x61\x62\x65\154" => "\xe9\x83\xa8\345\x88\206"], ["\x76\x61\x6c\165\x65" => "\157\156\x65", "\154\x61\142\145\x6c" => "\345\x8d\x95\xe4\xb8\252"]])->selectFirst(), amis()->TextControl("\153\x65\x79", "\xe8\256\xbe\347\xbd\256\351\241\271")->required()->visibleOn("\x24\x7b\155\x6f\x64\x65\x20\75\75\x20\x22\x6f\x6e\145\x22\175")->options($fx9wf), amis()->ArrayControl("\x6b\145\171\163", "\xe8\256\xbe\xe7\275\256\xe9\xa1\xb9")->required()->visibleOn("\x24\173\155\x6f\x64\x65\x20\75\x3d\40\x22\x70\141\x72\164\42\175")->items([amis()->TextControl("\x76\x61\154\x75\145")->required()->options($fx9wf)])]; } }
