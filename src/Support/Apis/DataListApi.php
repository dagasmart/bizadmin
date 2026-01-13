<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return admin_trans("\x61\144\155\x69\156\56\141\x70\151\137\x74\x65\155\x70\154\141\x74\145\163\x2e\144\141\x74\141\x5f\x6c\151\163\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\x64\145\154", admin_trans("\x61\x64\x6d\x69\x6e\x2e\x72\x65\154\x61\164\x69\x6f\x6e\163\x68\151\x70\x73\x2e\x6d\x6f\144\x65\x6c"))->required()->menuTpl("\44\x7b\154\x61\142\145\154\175\x20\74\x73\x70\141\x6e\x20\143\154\x61\163\163\75\x22\164\145\x78\164\55\x67\162\141\x79\x2d\x33\x30\60\40\160\x6c\x2d\62\x22\76\44\x7b\x74\x61\142\154\145\175\74\57\x73\160\141\x6e\76")->source("\57\144\145\x76\137\164\x6f\157\x6c\x73\x2f\x72\145\x6c\141\x74\x69\157\156\x2f\155\x6f\144\x65\154\x5f\157\160\164\151\x6f\x6e\163")->searchable()]; } protected function service() { goto RlHZT; g8HLb: return $soEGd; goto B10ks; OVmsH: $soEGd->setModelName($this->getArgs("\x6d\x6f\144\x65\x6c")); goto g8HLb; RlHZT: $soEGd = $this->blankService(); goto OVmsH; B10ks: } }
