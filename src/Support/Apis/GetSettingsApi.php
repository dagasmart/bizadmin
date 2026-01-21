<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:53              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return "\350\216\267\345\217\x96\xe8\xae\xbe\xe7\275\xae\351\241\xb9"; } public function handle() { $ABUMy = match ($this->getArgs("\155\x6f\x64\145")) { "\141\x6c\154" => settings()->all(), "\x70\141\x72\x74" => collect(settings()->all())->filter(fn($VAVke, $ERjdq) => in_array($ERjdq, $this->getArgs("\x6b\x65\171\x73")))->toArray(), "\x6f\x6e\x65" => settings()->get($this->getArgs("\153\145\171")), }; return Admin::response()->success($ABUMy); } public function argsSchema() { $G_xDA = collect(settings()->all())->keys()->map(fn($Sobeh) => ["\166\x61\154\x75\145" => $Sobeh, "\154\141\x62\145\x6c" => $Sobeh])->toArray(); return [amis()->RadiosControl("\x6d\x6f\144\x65", "\350\216\xb7\345\217\226\xe6\250\241\xe5\274\217")->options([["\x76\141\154\165\145" => "\x61\154\x6c", "\154\141\142\x65\x6c" => "\346\211\x80\xe6\234\211"], ["\166\141\154\165\x65" => "\x70\x61\162\164", "\x6c\141\x62\145\x6c" => "\351\203\xa8\xe5\210\x86"], ["\166\141\x6c\x75\145" => "\x6f\156\x65", "\154\141\142\145\154" => "\345\215\225\344\xb8\xaa"]])->selectFirst(), amis()->TextControl("\153\145\171", "\xe8\256\276\xe7\275\256\xe9\xa1\xb9")->required()->visibleOn("\44\173\x6d\157\x64\145\x20\75\75\40\x22\157\x6e\145\42\x7d")->options($G_xDA), amis()->ArrayControl("\153\145\171\163", "\350\xae\xbe\347\xbd\256\xe9\xa1\271")->required()->visibleOn("\x24\x7b\155\x6f\144\145\40\75\75\40\42\160\x61\162\x74\x22\x7d")->items([amis()->TextControl("\x76\141\154\x75\x65")->required()->options($G_xDA)])]; } }
