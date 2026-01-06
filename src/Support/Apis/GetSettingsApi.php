<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\x67\x65\164"; public function getTitle() { return "\350\x8e\267\345\x8f\226\xe8\xae\276\xe7\xbd\xae\xe9\241\271"; } public function handle() { $lyzrv = match ($this->getArgs("\x6d\x6f\144\145")) { "\x61\x6c\x6c" => settings()->all(), "\x70\141\x72\164" => collect(settings()->all())->filter(fn($vO0g9, $ApB6e) => in_array($ApB6e, $this->getArgs("\153\145\171\x73")))->toArray(), "\157\156\x65" => settings()->get($this->getArgs("\x6b\145\171")), }; return Admin::response()->success($lyzrv); } public function argsSchema() { $dNT7o = collect(settings()->all())->keys()->map(fn($QbN7z) => ["\166\x61\x6c\165\145" => $QbN7z, "\x6c\141\x62\145\154" => $QbN7z])->toArray(); return [amis()->RadiosControl("\x6d\x6f\x64\x65", "\xe8\x8e\267\345\x8f\x96\346\250\241\345\xbc\217")->options([["\x76\141\x6c\x75\x65" => "\x61\x6c\154", "\154\141\142\x65\x6c" => "\346\x89\200\xe6\x9c\211"], ["\x76\141\154\x75\145" => "\x70\x61\162\164", "\154\x61\142\145\x6c" => "\351\203\xa8\345\210\x86"], ["\x76\x61\x6c\x75\x65" => "\x6f\156\x65", "\154\x61\x62\x65\154" => "\xe5\215\225\344\270\xaa"]])->selectFirst(), amis()->TextControl("\x6b\x65\x79", "\350\xae\276\347\275\256\351\xa1\271")->required()->visibleOn("\44\x7b\155\x6f\144\x65\x20\75\x3d\40\x22\x6f\x6e\145\42\175")->options($dNT7o), amis()->ArrayControl("\153\x65\171\163", "\350\256\276\347\275\256\xe9\241\xb9")->required()->visibleOn("\x24\173\155\x6f\144\145\x20\75\x3d\x20\x22\x70\x61\x72\x74\42\x7d")->items([amis()->TextControl("\166\x61\x6c\165\145")->required()->options($dNT7o)])]; } }
