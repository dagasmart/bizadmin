<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:21              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\147\x65\164"; public function getTitle() { return admin_trans("\x61\144\x6d\151\x6e\x2e\141\160\151\x5f\164\x65\155\160\154\x61\164\145\x73\x2e\144\x61\164\x61\x5f\154\x69\x73\x74"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\144\145\x6c", admin_trans("\141\x64\155\x69\156\56\x72\145\154\141\164\151\x6f\156\x73\150\x69\160\163\56\155\x6f\x64\145\154"))->required()->menuTpl("\x24\173\x6c\x61\142\145\154\x7d\x20\x3c\x73\x70\x61\x6e\40\143\154\141\163\x73\x3d\x22\164\x65\170\164\x2d\147\162\x61\x79\x2d\63\x30\60\40\160\154\55\62\x22\x3e\x24\x7b\x74\x61\x62\154\x65\175\x3c\x2f\x73\160\x61\x6e\x3e")->source("\57\x64\x65\x76\x5f\x74\157\157\x6c\163\x2f\x72\145\x6c\141\x74\x69\x6f\156\x2f\x6d\157\x64\145\x6c\x5f\157\160\164\x69\x6f\x6e\163")->searchable()]; } protected function service() { goto fh9cf; fh9cf: $d76a1 = $this->blankService(); goto Jk4mO; Y54yz: return $d76a1; goto bO_Ib; Jk4mO: $d76a1->setModelName($this->getArgs("\x6d\x6f\144\x65\154")); goto Y54yz; bO_Ib: } }
