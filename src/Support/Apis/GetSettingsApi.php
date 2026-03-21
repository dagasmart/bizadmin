<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\145\x74"; public function getTitle() { return "\xe8\216\267\xe5\217\226\xe8\xae\xbe\xe7\xbd\256\351\241\xb9"; } public function handle() { $Uv4qm = match ($this->getArgs("\155\x6f\144\x65")) { "\141\x6c\154" => settings()->all(), "\160\141\162\164" => collect(settings()->all())->filter(fn($CX33F, $G95dL) => in_array($G95dL, $this->getArgs("\x6b\145\x79\163")))->toArray(), "\x6f\x6e\145" => settings()->get($this->getArgs("\x6b\145\171")), }; return Admin::response()->success($Uv4qm); } public function argsSchema() { $zSQ1F = collect(settings()->all())->keys()->map(fn($qfjJe) => ["\166\141\x6c\165\145" => $qfjJe, "\x6c\x61\x62\145\x6c" => $qfjJe])->toArray(); return [amis()->RadiosControl("\155\x6f\144\x65", "\350\216\xb7\345\x8f\226\xe6\xa8\241\345\xbc\x8f")->options([["\166\141\154\x75\x65" => "\x61\154\154", "\x6c\141\142\x65\154" => "\xe6\x89\x80\xe6\x9c\211"], ["\x76\x61\x6c\x75\145" => "\160\141\x72\x74", "\154\141\142\x65\x6c" => "\xe9\x83\xa8\345\210\x86"], ["\x76\x61\154\x75\145" => "\x6f\x6e\x65", "\154\x61\142\x65\154" => "\xe5\x8d\225\xe4\270\252"]])->selectFirst(), amis()->TextControl("\x6b\145\x79", "\350\xae\276\xe7\275\256\351\241\271")->required()->visibleOn("\x24\173\155\x6f\x64\x65\x20\x3d\75\40\42\157\156\x65\x22\175")->options($zSQ1F), amis()->ArrayControl("\x6b\145\171\163", "\350\xae\xbe\347\xbd\256\xe9\241\271")->required()->visibleOn("\x24\x7b\155\x6f\x64\145\40\75\x3d\x20\x22\160\x61\162\x74\x22\175")->items([amis()->TextControl("\x76\x61\154\x75\145")->required()->options($zSQ1F)])]; } }
