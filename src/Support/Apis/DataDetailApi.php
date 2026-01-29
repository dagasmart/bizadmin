<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\x65\164"; public function getTitle() { return admin_trans("\141\144\155\x69\156\56\141\160\x69\x5f\164\x65\x6d\160\x6c\x61\164\x65\x73\x2e\144\141\164\141\137\144\x65\164\141\x69\x6c"); } public function handle() { $a8P6L = $this->service()->getDetail(request($this->getArgs("\x70\x72\151\155\x61\162\171\x5f\153\145\171", "\x69\144"))); return Admin::response()->success($a8P6L); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\144\x65\x6c", admin_trans("\x61\144\155\x69\x6e\x2e\162\145\x6c\x61\x74\151\157\x6e\x73\x68\x69\x70\163\56\x6d\157\x64\x65\154"))->required()->menuTpl("\44\173\154\141\x62\145\154\x7d\40\x3c\x73\x70\x61\x6e\40\x63\x6c\141\163\x73\75\42\164\x65\x78\x74\55\147\x72\141\171\x2d\x33\60\x30\x20\160\154\x2d\x32\x22\x3e\44\x7b\164\x61\142\x6c\x65\x7d\74\x2f\x73\x70\x61\156\x3e")->source("\57\x64\x65\x76\137\x74\x6f\157\154\163\57\x72\x65\154\x61\164\151\157\156\57\x6d\157\x64\x65\x6c\x5f\157\x70\164\151\x6f\156\x73")->searchable(), amis()->TextControl("\x70\162\151\x6d\x61\162\171\x5f\x69\x64", admin_trans("\x61\144\155\151\156\x2e\x63\x6f\x64\x65\x5f\x67\145\156\x65\x72\x61\x74\x6f\162\x73\x2e\x70\162\151\155\x61\162\x79\137\x6b\145\x79"))->value("\x69\144")]; } protected function service() { goto P9Qb5; KpnBJ: $fuXGO->setModelName($this->getArgs("\x6d\157\x64\x65\x6c")); goto HLBIo; HLBIo: return $fuXGO; goto d0Ay0; P9Qb5: $fuXGO = $this->blankService(); goto KpnBJ; d0Ay0: } }
