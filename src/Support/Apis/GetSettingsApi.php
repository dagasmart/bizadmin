<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\x67\x65\164"; public function getTitle() { return "\350\216\xb7\xe5\217\226\xe8\xae\276\xe7\xbd\256\351\xa1\xb9"; } public function handle() { $tek9W = match ($this->getArgs("\155\x6f\144\145")) { "\141\x6c\154" => settings()->all(), "\x70\141\162\x74" => collect(settings()->all())->filter(fn($BpWI9, $snW0B) => in_array($snW0B, $this->getArgs("\153\145\x79\163")))->toArray(), "\x6f\x6e\145" => settings()->get($this->getArgs("\x6b\x65\x79")), }; return Admin::response()->success($tek9W); } public function argsSchema() { $Zqkm9 = collect(settings()->all())->keys()->map(fn($Z9bPa) => ["\166\141\154\165\x65" => $Z9bPa, "\x6c\x61\142\145\x6c" => $Z9bPa])->toArray(); return [amis()->RadiosControl("\155\157\x64\x65", "\xe8\216\xb7\345\217\x96\xe6\250\241\345\xbc\x8f")->options([["\166\141\154\165\145" => "\141\x6c\x6c", "\154\x61\x62\x65\x6c" => "\xe6\x89\x80\xe6\x9c\211"], ["\166\141\154\x75\x65" => "\160\141\x72\x74", "\154\141\142\145\x6c" => "\351\x83\xa8\345\x88\x86"], ["\x76\x61\154\x75\x65" => "\157\156\x65", "\x6c\141\x62\145\154" => "\345\215\x95\344\270\252"]])->selectFirst(), amis()->TextControl("\x6b\145\171", "\350\256\276\347\275\256\351\241\271")->required()->visibleOn("\44\x7b\155\157\x64\x65\40\x3d\75\40\x22\157\156\145\x22\x7d")->options($Zqkm9), amis()->ArrayControl("\153\145\171\163", "\350\xae\276\347\275\xae\xe9\xa1\271")->required()->visibleOn("\44\x7b\155\x6f\x64\145\40\x3d\x3d\40\x22\x70\141\x72\164\x22\175")->items([amis()->TextControl("\x76\141\154\165\145")->required()->options($Zqkm9)])]; } }
