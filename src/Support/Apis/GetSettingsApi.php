<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\x65\164"; public function getTitle() { return "\350\x8e\xb7\xe5\217\x96\350\xae\276\xe7\xbd\xae\xe9\241\271"; } public function handle() { $PN11n = match ($this->getArgs("\155\157\144\145")) { "\141\154\154" => settings()->all(), "\160\141\162\x74" => collect(settings()->all())->filter(fn($d9EJX, $yZQbX) => in_array($yZQbX, $this->getArgs("\x6b\x65\x79\x73")))->toArray(), "\157\156\145" => settings()->get($this->getArgs("\153\x65\171")), }; return Admin::response()->success($PN11n); } public function argsSchema() { $Ciy91 = collect(settings()->all())->keys()->map(fn($S8QYq) => ["\x76\x61\x6c\x75\145" => $S8QYq, "\x6c\x61\x62\x65\x6c" => $S8QYq])->toArray(); return [amis()->RadiosControl("\155\157\x64\x65", "\xe8\216\267\xe5\217\226\346\250\xa1\345\xbc\217")->options([["\166\141\154\x75\x65" => "\141\x6c\154", "\x6c\x61\142\145\x6c" => "\346\211\200\346\234\x89"], ["\166\x61\x6c\165\x65" => "\160\141\162\164", "\x6c\x61\142\145\x6c" => "\351\x83\xa8\345\210\x86"], ["\x76\x61\154\x75\145" => "\x6f\x6e\x65", "\x6c\141\142\x65\154" => "\xe5\215\x95\344\270\252"]])->selectFirst(), amis()->TextControl("\153\145\171", "\350\xae\276\347\xbd\xae\351\xa1\271")->required()->visibleOn("\44\173\x6d\x6f\x64\145\40\75\x3d\x20\42\x6f\156\145\42\175")->options($Ciy91), amis()->ArrayControl("\153\145\171\x73", "\xe8\256\276\347\275\256\351\xa1\271")->required()->visibleOn("\44\173\x6d\x6f\x64\x65\40\x3d\x3d\x20\x22\160\141\162\x74\42\x7d")->items([amis()->TextControl("\166\x61\154\x75\x65")->required()->options($Ciy91)])]; } }
