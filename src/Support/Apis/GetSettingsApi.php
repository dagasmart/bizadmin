<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return "\350\x8e\xb7\345\x8f\x96\350\xae\276\xe7\275\xae\351\xa1\xb9"; } public function handle() { $yLUxg = match ($this->getArgs("\x6d\x6f\x64\x65")) { "\141\154\154" => settings()->all(), "\x70\141\162\164" => collect(settings()->all())->filter(fn($FaV5v, $jjCl2) => in_array($jjCl2, $this->getArgs("\153\145\x79\x73")))->toArray(), "\157\x6e\145" => settings()->get($this->getArgs("\153\x65\171")), }; return Admin::response()->success($yLUxg); } public function argsSchema() { $Mc22I = collect(settings()->all())->keys()->map(fn($ItAOs) => ["\x76\x61\154\x75\145" => $ItAOs, "\154\x61\x62\x65\154" => $ItAOs])->toArray(); return [amis()->RadiosControl("\155\x6f\x64\x65", "\350\216\267\xe5\x8f\x96\xe6\250\xa1\xe5\xbc\x8f")->options([["\x76\x61\154\x75\145" => "\x61\154\154", "\x6c\x61\x62\145\154" => "\xe6\211\x80\xe6\x9c\x89"], ["\166\x61\x6c\165\145" => "\x70\x61\162\164", "\154\141\142\x65\x6c" => "\351\x83\250\345\210\x86"], ["\x76\x61\154\165\x65" => "\x6f\x6e\145", "\x6c\x61\x62\x65\154" => "\xe5\215\x95\xe4\xb8\252"]])->selectFirst(), amis()->TextControl("\x6b\x65\171", "\xe8\256\xbe\347\275\256\xe9\241\xb9")->required()->visibleOn("\44\173\155\157\x64\x65\40\x3d\x3d\x20\42\x6f\156\x65\42\x7d")->options($Mc22I), amis()->ArrayControl("\x6b\x65\x79\163", "\350\xae\276\347\275\256\351\xa1\271")->required()->visibleOn("\44\173\x6d\157\144\x65\40\75\x3d\x20\42\x70\x61\162\x74\x22\x7d")->items([amis()->TextControl("\x76\x61\154\x75\145")->required()->options($Mc22I)])]; } }
