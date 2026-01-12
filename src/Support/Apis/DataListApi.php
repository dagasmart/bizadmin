<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:00              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\145\x74"; public function getTitle() { return admin_trans("\141\144\155\x69\156\x2e\x61\x70\151\x5f\x74\145\155\x70\x6c\141\x74\x65\163\56\x64\x61\164\141\137\x6c\151\163\x74"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\x6d\157\x64\x65\154", admin_trans("\141\144\155\151\x6e\x2e\x72\x65\154\141\x74\x69\x6f\156\x73\x68\151\160\163\x2e\x6d\x6f\144\x65\154"))->required()->menuTpl("\x24\173\x6c\141\x62\145\x6c\x7d\40\74\x73\160\141\156\x20\143\154\141\163\x73\75\42\x74\x65\x78\164\55\147\162\141\x79\x2d\63\60\x30\x20\x70\x6c\55\x32\x22\76\x24\173\164\141\x62\x6c\145\175\x3c\x2f\x73\x70\141\156\76")->source("\57\144\x65\x76\137\x74\x6f\x6f\x6c\x73\57\x72\x65\x6c\141\164\151\x6f\x6e\57\x6d\x6f\x64\145\154\137\x6f\160\164\151\157\x6e\163")->searchable()]; } protected function service() { goto JA3H1; TpkVk: $QgWx6->setModelName($this->getArgs("\155\157\x64\145\154")); goto TARB7; TARB7: return $QgWx6; goto YQbyE; JA3H1: $QgWx6 = $this->blankService(); goto TpkVk; YQbyE: } }
