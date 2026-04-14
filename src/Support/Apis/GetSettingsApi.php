<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return "\350\x8e\xb7\xe5\x8f\226\350\xae\xbe\347\xbd\xae\xe9\xa1\271"; } public function handle() { $MvDNw = match ($this->getArgs("\155\x6f\144\x65")) { "\141\x6c\x6c" => settings()->all(), "\160\x61\x72\x74" => collect(settings()->all())->filter(fn($dzohB, $fBmpg) => in_array($fBmpg, $this->getArgs("\x6b\x65\x79\163")))->toArray(), "\157\156\145" => settings()->get($this->getArgs("\153\x65\171")), }; return Admin::response()->success($MvDNw); } public function argsSchema() { $mV1Nu = collect(settings()->all())->keys()->map(fn($eVLXV) => ["\166\x61\154\x75\x65" => $eVLXV, "\154\141\142\x65\x6c" => $eVLXV])->toArray(); return [amis()->RadiosControl("\x6d\x6f\144\x65", "\350\216\xb7\345\x8f\226\346\250\xa1\345\274\x8f")->options([["\x76\x61\154\165\145" => "\141\x6c\x6c", "\154\x61\142\x65\154" => "\xe6\211\200\xe6\x9c\211"], ["\x76\141\154\x75\145" => "\x70\x61\x72\164", "\x6c\141\142\x65\x6c" => "\xe9\x83\xa8\xe5\x88\x86"], ["\166\141\154\165\145" => "\157\156\x65", "\154\x61\142\x65\x6c" => "\345\215\x95\344\270\252"]])->selectFirst(), amis()->TextControl("\153\x65\171", "\xe8\256\xbe\347\xbd\xae\351\xa1\xb9")->required()->visibleOn("\x24\173\155\x6f\x64\x65\40\x3d\75\40\42\x6f\x6e\145\42\175")->options($mV1Nu), amis()->ArrayControl("\153\145\x79\163", "\xe8\256\276\xe7\275\xae\xe9\xa1\271")->required()->visibleOn("\x24\x7b\x6d\x6f\144\145\40\x3d\75\x20\42\160\141\162\x74\42\x7d")->items([amis()->TextControl("\166\141\154\x75\145")->required()->options($mV1Nu)])]; } }
