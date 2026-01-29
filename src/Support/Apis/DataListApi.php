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
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\x65\164"; public function getTitle() { return admin_trans("\141\x64\155\x69\156\x2e\141\160\151\137\164\x65\155\x70\154\x61\x74\145\163\x2e\x64\x61\x74\141\x5f\154\151\163\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\x64\x65\154", admin_trans("\141\144\x6d\151\x6e\x2e\162\x65\154\x61\x74\x69\157\156\x73\150\x69\160\163\x2e\155\157\x64\145\x6c"))->required()->menuTpl("\x24\173\154\141\x62\145\154\175\x20\74\163\x70\x61\156\40\x63\x6c\x61\163\x73\75\x22\x74\145\170\164\x2d\147\x72\x61\171\x2d\x33\60\60\40\160\154\55\x32\x22\x3e\44\x7b\164\x61\142\154\145\x7d\74\57\x73\x70\x61\x6e\x3e")->source("\57\144\x65\x76\137\164\x6f\157\154\163\57\162\145\154\141\x74\x69\157\156\x2f\155\157\144\x65\x6c\137\157\160\164\151\x6f\156\163")->searchable()]; } protected function service() { goto rgxEJ; jQhv4: return $d76a1; goto qPo57; RBypQ: $d76a1->setModelName($this->getArgs("\155\x6f\144\145\x6c")); goto jQhv4; rgxEJ: $d76a1 = $this->blankService(); goto RBypQ; qPo57: } }
