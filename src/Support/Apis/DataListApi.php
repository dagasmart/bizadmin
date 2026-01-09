<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\147\145\164"; public function getTitle() { return admin_trans("\x61\144\155\151\156\x2e\x61\160\151\x5f\x74\145\x6d\x70\x6c\141\164\145\x73\56\144\141\x74\141\x5f\154\x69\163\x74"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\144\145\x6c", admin_trans("\x61\144\155\151\x6e\56\162\x65\154\141\x74\x69\157\156\163\150\x69\x70\163\x2e\x6d\x6f\x64\x65\x6c"))->required()->menuTpl("\x24\x7b\154\x61\142\145\x6c\x7d\40\x3c\163\160\x61\156\40\143\154\x61\163\x73\x3d\x22\x74\145\x78\164\x2d\147\162\141\171\55\63\60\60\40\x70\154\55\x32\42\76\44\173\164\x61\x62\154\x65\175\x3c\x2f\163\x70\141\156\x3e")->source("\x2f\x64\145\x76\x5f\x74\157\x6f\x6c\x73\57\162\x65\x6c\x61\x74\151\x6f\x6e\57\x6d\157\x64\x65\154\x5f\157\160\164\151\x6f\156\x73")->searchable()]; } protected function service() { goto J2Fjj; UIrSR: $C1aYf->setModelName($this->getArgs("\x6d\157\x64\x65\154")); goto SAJ24; J2Fjj: $C1aYf = $this->blankService(); goto UIrSR; SAJ24: return $C1aYf; goto sfvZH; sfvZH: } }
