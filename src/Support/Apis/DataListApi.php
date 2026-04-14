<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\145\x74"; public function getTitle() { return admin_trans("\141\144\x6d\151\156\x2e\x61\160\x69\137\164\x65\155\x70\154\141\x74\x65\x73\56\144\x61\164\x61\x5f\154\x69\163\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\x64\145\154", admin_trans("\x61\144\x6d\151\156\x2e\x72\x65\x6c\141\164\x69\x6f\156\x73\x68\x69\x70\x73\x2e\155\x6f\x64\x65\x6c"))->required()->menuTpl("\44\173\x6c\x61\x62\x65\154\175\40\x3c\x73\x70\x61\x6e\x20\x63\x6c\x61\163\x73\x3d\42\164\x65\170\164\55\147\162\x61\171\x2d\x33\60\x30\40\x70\x6c\55\62\x22\x3e\x24\x7b\x74\141\x62\x6c\145\175\74\x2f\163\x70\141\156\x3e")->source("\x2f\144\x65\x76\x5f\x74\x6f\x6f\154\163\57\162\145\154\141\x74\x69\157\x6e\57\x6d\x6f\144\x65\154\137\x6f\x70\x74\151\157\156\163")->searchable()]; } protected function service() { goto QcgHG; QcgHG: $d76a1 = $this->blankService(); goto rDLRj; dopZ4: return $d76a1; goto fx_st; rDLRj: $d76a1->setModelName($this->getArgs("\x6d\157\144\x65\154")); goto dopZ4; fx_st: } }
