<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\147\x65\164"; public function getTitle() { return admin_trans("\141\x64\155\x69\x6e\x2e\141\x70\x69\137\x74\145\155\160\154\x61\x74\x65\x73\x2e\x64\x61\x74\141\137\x6c\x69\x73\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\x64\x65\154", admin_trans("\x61\x64\x6d\x69\x6e\56\x72\145\x6c\141\x74\151\157\156\163\x68\151\x70\163\x2e\x6d\x6f\x64\x65\154"))->required()->menuTpl("\x24\173\154\x61\x62\x65\154\x7d\x20\x3c\163\160\141\156\40\x63\x6c\x61\x73\163\75\42\x74\145\x78\x74\55\147\162\141\x79\55\63\60\x30\40\160\154\55\x32\42\x3e\44\x7b\164\141\x62\154\145\175\x3c\x2f\x73\160\141\x6e\x3e")->source("\57\144\x65\166\137\x74\x6f\x6f\154\163\x2f\162\x65\x6c\x61\164\151\x6f\x6e\57\155\157\144\x65\154\137\x6f\160\164\x69\x6f\x6e\x73")->searchable()]; } protected function service() { goto YB2u6; x59Wj: return $cfXhw; goto g3nxa; ySG0b: $cfXhw->setModelName($this->getArgs("\x6d\157\x64\145\x6c")); goto x59Wj; YB2u6: $cfXhw = $this->blankService(); goto ySG0b; g3nxa: } }
