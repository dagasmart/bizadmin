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
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\145\164"; public function getTitle() { return "\350\216\xb7\xe5\217\x96\350\xae\xbe\xe7\xbd\xae\xe9\xa1\xb9"; } public function handle() { $n1i_W = match ($this->getArgs("\155\157\144\145")) { "\141\x6c\154" => settings()->all(), "\160\x61\x72\x74" => collect(settings()->all())->filter(fn($WdnIo, $gjtjq) => in_array($gjtjq, $this->getArgs("\153\145\x79\163")))->toArray(), "\157\156\x65" => settings()->get($this->getArgs("\x6b\145\x79")), }; return Admin::response()->success($n1i_W); } public function argsSchema() { $HnvKI = collect(settings()->all())->keys()->map(fn($F7jJE) => ["\166\x61\x6c\165\145" => $F7jJE, "\154\x61\x62\145\154" => $F7jJE])->toArray(); return [amis()->RadiosControl("\155\x6f\144\x65", "\xe8\216\267\345\217\226\346\250\241\345\xbc\217")->options([["\x76\x61\x6c\165\x65" => "\x61\154\x6c", "\154\141\142\x65\x6c" => "\346\x89\x80\346\x9c\x89"], ["\166\141\154\165\145" => "\160\141\x72\164", "\x6c\141\142\145\154" => "\351\x83\250\xe5\x88\206"], ["\166\x61\x6c\x75\145" => "\x6f\156\x65", "\154\141\142\145\x6c" => "\xe5\215\x95\344\xb8\252"]])->selectFirst(), amis()->TextControl("\x6b\x65\171", "\xe8\xae\xbe\xe7\xbd\xae\xe9\xa1\xb9")->required()->visibleOn("\x24\x7b\155\x6f\144\x65\x20\x3d\x3d\40\42\157\156\x65\x22\175")->options($HnvKI), amis()->ArrayControl("\153\x65\x79\x73", "\xe8\256\xbe\347\275\xae\xe9\241\271")->required()->visibleOn("\x24\x7b\x6d\157\x64\x65\x20\75\75\40\42\x70\141\x72\x74\42\175")->items([amis()->TextControl("\166\141\154\165\145")->required()->options($HnvKI)])]; } }
