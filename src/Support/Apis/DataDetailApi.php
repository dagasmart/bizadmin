<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:43              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return admin_trans("\x61\144\x6d\x69\x6e\x2e\141\160\151\x5f\164\x65\x6d\x70\x6c\x61\x74\145\163\x2e\144\x61\x74\141\x5f\x64\145\x74\x61\x69\x6c"); } public function handle() { $PN11n = $this->service()->getDetail(request($this->getArgs("\160\162\151\155\141\x72\171\137\x6b\145\x79", "\x69\x64"))); return Admin::response()->success($PN11n); } public function argsSchema() { return [amis()->SelectControl("\155\157\x64\x65\154", admin_trans("\141\x64\155\x69\156\x2e\162\x65\x6c\x61\164\151\x6f\156\x73\150\151\160\x73\x2e\155\157\144\145\154"))->required()->menuTpl("\x24\173\154\141\142\x65\x6c\x7d\40\x3c\163\x70\141\156\40\x63\x6c\141\163\x73\75\42\164\x65\x78\164\55\147\x72\x61\x79\x2d\x33\60\60\40\160\154\x2d\x32\x22\x3e\44\173\164\141\142\x6c\145\x7d\74\x2f\163\160\141\156\x3e")->source("\57\x64\x65\x76\x5f\x74\157\x6f\x6c\x73\x2f\162\145\154\x61\x74\151\157\x6e\x2f\x6d\x6f\144\x65\x6c\x5f\x6f\160\164\x69\x6f\x6e\163")->searchable(), amis()->TextControl("\160\x72\151\x6d\141\x72\x79\x5f\151\144", admin_trans("\x61\x64\155\x69\156\56\143\x6f\x64\x65\137\147\145\x6e\x65\162\x61\164\157\x72\x73\x2e\x70\162\x69\x6d\141\x72\171\137\x6b\145\171"))->value("\151\144")]; } protected function service() { goto gSYN1; gSYN1: $aY2_h = $this->blankService(); goto lDaXz; lDaXz: $aY2_h->setModelName($this->getArgs("\x6d\x6f\x64\145\154")); goto jEp9O; jEp9O: return $aY2_h; goto AKtZj; AKtZj: } }
