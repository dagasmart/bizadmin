<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\x67\x65\x74"; public function getTitle() { return admin_trans("\141\144\x6d\x69\156\x2e\141\160\x69\137\x74\x65\155\160\x6c\x61\164\145\163\56\x64\x61\x74\141\x5f\144\145\164\x61\151\x6c"); } public function handle() { $pO3HX = $this->service()->getDetail(request($this->getArgs("\x70\x72\x69\155\x61\x72\x79\137\x6b\145\x79", "\x69\x64"))); return Admin::response()->success($pO3HX); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\144\x65\154", admin_trans("\141\x64\155\151\x6e\x2e\x72\145\154\141\164\151\x6f\156\163\x68\151\x70\x73\x2e\155\157\x64\145\154"))->required()->menuTpl("\x24\x7b\x6c\141\142\x65\154\x7d\40\x3c\x73\160\x61\x6e\x20\143\154\141\163\163\75\x22\x74\145\170\x74\x2d\147\x72\x61\171\x2d\x33\x30\x30\40\x70\x6c\x2d\x32\42\x3e\x24\173\164\141\x62\154\145\175\74\x2f\x73\x70\141\156\76")->source("\x2f\144\x65\x76\137\x74\x6f\157\154\163\57\x72\145\154\x61\164\x69\x6f\x6e\57\155\x6f\x64\x65\x6c\137\157\x70\x74\151\x6f\156\163")->searchable(), amis()->TextControl("\x70\162\x69\x6d\x61\162\171\x5f\151\144", admin_trans("\x61\x64\155\151\x6e\x2e\143\x6f\144\x65\x5f\147\x65\156\x65\x72\x61\x74\x6f\162\x73\56\160\x72\151\155\x61\162\x79\137\x6b\145\171"))->value("\151\x64")]; } protected function service() { goto xZpOw; Tba5e: return $voXKq; goto tA_u0; qLZuZ: $voXKq->setModelName($this->getArgs("\x6d\x6f\x64\x65\x6c")); goto Tba5e; xZpOw: $voXKq = $this->blankService(); goto qLZuZ; tA_u0: } }
