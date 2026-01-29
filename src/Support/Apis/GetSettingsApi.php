<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class GetSettingsApi extends AdminBaseApi { public string $method = "\147\145\x74"; public function getTitle() { return "\xe8\x8e\xb7\345\x8f\x96\xe8\256\276\347\xbd\256\xe9\xa1\xb9"; } public function handle() { $Scqzw = match ($this->getArgs("\155\157\144\x65")) { "\x61\x6c\154" => settings()->all(), "\160\x61\162\164" => collect(settings()->all())->filter(fn($oEjob, $OIz8D) => in_array($OIz8D, $this->getArgs("\x6b\145\x79\163")))->toArray(), "\157\x6e\145" => settings()->get($this->getArgs("\x6b\145\171")), }; return Admin::response()->success($Scqzw); } public function argsSchema() { $U3PzW = collect(settings()->all())->keys()->map(fn($YS3rG) => ["\166\141\154\x75\x65" => $YS3rG, "\x6c\141\142\x65\154" => $YS3rG])->toArray(); return [amis()->RadiosControl("\x6d\x6f\x64\145", "\xe8\x8e\xb7\xe5\x8f\x96\xe6\xa8\xa1\345\274\x8f")->options([["\x76\141\154\x75\x65" => "\141\154\154", "\x6c\141\x62\145\154" => "\xe6\x89\x80\xe6\x9c\x89"], ["\166\x61\x6c\x75\145" => "\160\x61\x72\x74", "\x6c\141\142\145\154" => "\xe9\203\xa8\345\210\x86"], ["\x76\x61\154\x75\x65" => "\157\156\145", "\154\x61\142\x65\x6c" => "\xe5\x8d\x95\xe4\xb8\xaa"]])->selectFirst(), amis()->TextControl("\153\145\x79", "\350\256\xbe\347\xbd\256\351\241\xb9")->required()->visibleOn("\x24\x7b\x6d\157\x64\145\40\x3d\75\40\x22\157\x6e\145\42\x7d")->options($U3PzW), amis()->ArrayControl("\153\145\x79\x73", "\xe8\xae\276\xe7\275\xae\xe9\xa1\xb9")->required()->visibleOn("\x24\x7b\155\157\x64\145\40\x3d\x3d\x20\x22\x70\141\162\x74\x22\x7d")->items([amis()->TextControl("\166\141\154\x75\145")->required()->options($U3PzW)])]; } }
