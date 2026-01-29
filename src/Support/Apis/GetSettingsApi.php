<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:24              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\145\164"; public function getTitle() { return "\xe8\216\267\xe5\x8f\226\xe8\256\276\xe7\275\256\351\241\271"; } public function handle() { $MvDNw = match ($this->getArgs("\155\x6f\144\145")) { "\x61\154\154" => settings()->all(), "\x70\x61\162\x74" => collect(settings()->all())->filter(fn($dzohB, $fBmpg) => in_array($fBmpg, $this->getArgs("\x6b\x65\171\x73")))->toArray(), "\x6f\x6e\145" => settings()->get($this->getArgs("\x6b\x65\171")), }; return Admin::response()->success($MvDNw); } public function argsSchema() { $mV1Nu = collect(settings()->all())->keys()->map(fn($eVLXV) => ["\166\x61\154\165\x65" => $eVLXV, "\x6c\141\x62\145\154" => $eVLXV])->toArray(); return [amis()->RadiosControl("\155\x6f\144\145", "\xe8\x8e\xb7\xe5\x8f\226\346\xa8\241\345\274\x8f")->options([["\166\x61\x6c\x75\145" => "\141\x6c\154", "\x6c\x61\142\x65\x6c" => "\346\211\200\xe6\x9c\x89"], ["\166\141\x6c\165\145" => "\x70\x61\x72\164", "\154\x61\x62\x65\x6c" => "\351\x83\250\345\x88\206"], ["\x76\x61\x6c\165\x65" => "\x6f\156\x65", "\x6c\x61\142\x65\154" => "\xe5\215\x95\xe4\xb8\252"]])->selectFirst(), amis()->TextControl("\153\145\x79", "\xe8\256\276\347\275\xae\351\xa1\xb9")->required()->visibleOn("\x24\x7b\x6d\157\x64\x65\x20\x3d\x3d\x20\x22\x6f\156\x65\x22\x7d")->options($mV1Nu), amis()->ArrayControl("\x6b\145\x79\x73", "\xe8\256\276\347\275\xae\351\241\271")->required()->visibleOn("\44\173\155\157\144\x65\40\75\75\x20\x22\x70\x61\162\x74\42\x7d")->items([amis()->TextControl("\166\141\154\x75\145")->required()->options($mV1Nu)])]; } }
