<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return "\xe8\x8e\xb7\xe5\217\226\xe8\256\xbe\347\xbd\xae\351\241\271"; } public function handle() { $sLb0B = match ($this->getArgs("\155\157\144\x65")) { "\x61\x6c\x6c" => settings()->all(), "\x70\x61\162\164" => collect(settings()->all())->filter(fn($EwiJH, $i_630) => in_array($i_630, $this->getArgs("\x6b\145\171\163")))->toArray(), "\x6f\156\x65" => settings()->get($this->getArgs("\153\145\x79")), }; return Admin::response()->success($sLb0B); } public function argsSchema() { $mYNWM = collect(settings()->all())->keys()->map(fn($wTXX8) => ["\x76\141\x6c\x75\145" => $wTXX8, "\154\141\x62\x65\154" => $wTXX8])->toArray(); return [amis()->RadiosControl("\155\x6f\144\x65", "\350\x8e\xb7\xe5\x8f\226\xe6\250\xa1\345\274\x8f")->options([["\166\141\154\x75\x65" => "\x61\x6c\x6c", "\x6c\141\x62\x65\154" => "\346\x89\200\xe6\234\x89"], ["\166\x61\x6c\165\145" => "\160\141\x72\x74", "\x6c\x61\142\145\x6c" => "\351\203\xa8\xe5\x88\x86"], ["\166\141\x6c\165\x65" => "\157\156\145", "\x6c\141\x62\x65\154" => "\xe5\215\225\xe4\xb8\252"]])->selectFirst(), amis()->TextControl("\x6b\x65\171", "\350\256\276\xe7\275\xae\351\241\xb9")->required()->visibleOn("\44\x7b\155\x6f\144\145\40\x3d\x3d\40\42\157\156\x65\x22\x7d")->options($mYNWM), amis()->ArrayControl("\153\x65\171\x73", "\xe8\256\276\347\xbd\256\351\241\xb9")->required()->visibleOn("\44\x7b\x6d\157\x64\x65\40\75\75\x20\x22\x70\141\162\x74\x22\175")->items([amis()->TextControl("\x76\x61\154\x75\145")->required()->options($mYNWM)])]; } }
