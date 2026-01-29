<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\x67\145\164"; public function getTitle() { return "\350\216\267\345\217\x96\350\256\xbe\347\275\xae\351\xa1\271"; } public function handle() { $a8P6L = match ($this->getArgs("\x6d\157\144\145")) { "\x61\x6c\x6c" => settings()->all(), "\x70\x61\162\164" => collect(settings()->all())->filter(fn($vqdSL, $CPrU2) => in_array($CPrU2, $this->getArgs("\153\x65\x79\x73")))->toArray(), "\157\156\145" => settings()->get($this->getArgs("\x6b\145\171")), }; return Admin::response()->success($a8P6L); } public function argsSchema() { $jIuzo = collect(settings()->all())->keys()->map(fn($WGIa7) => ["\166\x61\x6c\165\145" => $WGIa7, "\x6c\141\142\x65\x6c" => $WGIa7])->toArray(); return [amis()->RadiosControl("\x6d\157\144\x65", "\350\216\267\345\217\226\346\xa8\xa1\345\xbc\x8f")->options([["\x76\141\x6c\165\145" => "\141\x6c\x6c", "\x6c\x61\142\x65\x6c" => "\346\x89\200\xe6\x9c\211"], ["\166\x61\154\x75\145" => "\160\141\x72\x74", "\154\x61\x62\145\154" => "\351\203\250\xe5\210\x86"], ["\x76\x61\x6c\165\x65" => "\157\156\x65", "\x6c\141\142\145\x6c" => "\xe5\215\225\344\270\252"]])->selectFirst(), amis()->TextControl("\x6b\145\x79", "\350\xae\276\347\xbd\256\351\241\271")->required()->visibleOn("\x24\x7b\x6d\157\x64\x65\x20\x3d\75\40\x22\157\156\145\42\175")->options($jIuzo), amis()->ArrayControl("\x6b\x65\x79\163", "\350\xae\276\347\275\xae\xe9\241\271")->required()->visibleOn("\x24\x7b\x6d\157\x64\x65\x20\75\75\40\x22\160\x61\x72\x74\x22\175")->items([amis()->TextControl("\x76\141\x6c\165\145")->required()->options($jIuzo)])]; } }
