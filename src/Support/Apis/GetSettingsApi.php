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
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\145\x74"; public function getTitle() { return "\350\216\xb7\345\x8f\x96\xe8\xae\xbe\xe7\xbd\256\xe9\xa1\xb9"; } public function handle() { $G8KP3 = match ($this->getArgs("\x6d\x6f\144\x65")) { "\x61\x6c\x6c" => settings()->all(), "\x70\x61\162\x74" => collect(settings()->all())->filter(fn($qF0Kv, $cdntY) => in_array($cdntY, $this->getArgs("\153\145\171\x73")))->toArray(), "\x6f\x6e\145" => settings()->get($this->getArgs("\153\x65\x79")), }; return Admin::response()->success($G8KP3); } public function argsSchema() { $k31zi = collect(settings()->all())->keys()->map(fn($yTx8b) => ["\x76\141\154\165\145" => $yTx8b, "\154\141\142\x65\154" => $yTx8b])->toArray(); return [amis()->RadiosControl("\x6d\157\144\x65", "\xe8\216\xb7\345\217\x96\346\xa8\xa1\xe5\274\217")->options([["\166\141\154\165\x65" => "\141\x6c\154", "\154\141\x62\x65\x6c" => "\346\x89\x80\xe6\234\211"], ["\x76\141\x6c\x75\145" => "\x70\141\162\x74", "\x6c\x61\142\145\x6c" => "\xe9\203\250\345\210\206"], ["\166\141\154\x75\145" => "\x6f\156\145", "\x6c\141\142\x65\154" => "\xe5\x8d\225\344\xb8\xaa"]])->selectFirst(), amis()->TextControl("\x6b\x65\x79", "\xe8\256\xbe\347\xbd\256\xe9\241\271")->required()->visibleOn("\x24\x7b\155\x6f\x64\145\x20\75\75\x20\42\157\x6e\145\x22\175")->options($k31zi), amis()->ArrayControl("\153\x65\x79\163", "\xe8\256\276\xe7\275\xae\351\xa1\271")->required()->visibleOn("\x24\x7b\155\x6f\x64\x65\40\75\x3d\40\42\160\x61\x72\164\x22\x7d")->items([amis()->TextControl("\166\x61\x6c\165\x65")->required()->options($k31zi)])]; } }
