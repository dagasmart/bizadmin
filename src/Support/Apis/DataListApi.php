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
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return admin_trans("\x61\144\x6d\151\156\x2e\141\x70\x69\137\164\145\x6d\160\x6c\x61\164\145\163\56\x64\141\x74\x61\x5f\x6c\151\163\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\x64\145\x6c", admin_trans("\x61\144\155\151\156\x2e\x72\145\154\x61\x74\151\x6f\156\x73\x68\x69\x70\x73\x2e\x6d\157\144\145\x6c"))->required()->menuTpl("\x24\x7b\154\141\x62\145\x6c\x7d\40\x3c\x73\x70\141\x6e\40\143\x6c\141\163\163\75\x22\x74\x65\170\164\55\x67\162\141\171\x2d\x33\x30\60\40\160\154\x2d\62\x22\76\44\x7b\x74\x61\142\154\145\175\74\x2f\163\160\141\x6e\x3e")->source("\x2f\144\x65\x76\x5f\x74\x6f\x6f\154\163\57\x72\145\154\141\x74\151\x6f\x6e\x2f\155\x6f\x64\145\x6c\x5f\157\x70\164\x69\x6f\x6e\163")->searchable()]; } protected function service() { goto hROXI; N5nLy: return $voXKq; goto eofKO; RNqXi: $voXKq->setModelName($this->getArgs("\155\157\x64\x65\x6c")); goto N5nLy; hROXI: $voXKq = $this->blankService(); goto RNqXi; eofKO: } }
