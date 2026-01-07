<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\x67\145\164"; public function getTitle() { return "\xe8\216\xb7\xe5\x8f\226\350\256\276\xe7\275\256\351\xa1\271"; } public function handle() { $OFJRl = match ($this->getArgs("\x6d\157\x64\x65")) { "\141\154\x6c" => settings()->all(), "\160\141\162\x74" => collect(settings()->all())->filter(fn($aYUvD, $SLxWh) => in_array($SLxWh, $this->getArgs("\153\145\171\163")))->toArray(), "\157\156\145" => settings()->get($this->getArgs("\x6b\x65\171")), }; return Admin::response()->success($OFJRl); } public function argsSchema() { $GI7u0 = collect(settings()->all())->keys()->map(fn($nbxtl) => ["\166\141\x6c\165\x65" => $nbxtl, "\154\141\x62\x65\154" => $nbxtl])->toArray(); return [amis()->RadiosControl("\x6d\157\x64\145", "\350\x8e\xb7\xe5\217\226\xe6\250\xa1\345\274\217")->options([["\x76\x61\154\x75\x65" => "\141\154\x6c", "\x6c\141\142\x65\x6c" => "\xe6\211\200\xe6\234\211"], ["\x76\141\154\x75\x65" => "\x70\141\x72\x74", "\154\x61\142\145\154" => "\351\x83\xa8\345\210\x86"], ["\166\141\x6c\165\145" => "\157\156\x65", "\x6c\141\142\x65\154" => "\xe5\215\225\344\270\xaa"]])->selectFirst(), amis()->TextControl("\153\x65\x79", "\xe8\256\xbe\xe7\xbd\256\351\241\xb9")->required()->visibleOn("\44\x7b\155\157\x64\x65\x20\75\75\40\x22\157\x6e\145\42\175")->options($GI7u0), amis()->ArrayControl("\x6b\x65\171\163", "\350\256\276\347\xbd\256\351\241\xb9")->required()->visibleOn("\x24\x7b\x6d\x6f\x64\145\x20\75\x3d\x20\x22\160\141\162\164\x22\x7d")->items([amis()->TextControl("\166\141\154\x75\145")->required()->options($GI7u0)])]; } }
