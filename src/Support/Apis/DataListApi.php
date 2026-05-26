<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:17              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\145\164"; public function getTitle() { return admin_trans("\x61\x64\155\151\156\x2e\141\x70\x69\x5f\x74\145\x6d\160\154\x61\x74\145\x73\x2e\144\141\164\141\x5f\x6c\151\x73\x74"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\x64\145\x6c", admin_trans("\141\x64\155\x69\156\x2e\x72\x65\x6c\141\x74\151\157\x6e\x73\x68\x69\x70\x73\56\x6d\x6f\144\x65\154"))->required()->menuTpl("\x24\173\154\141\142\x65\x6c\175\x20\x3c\163\160\141\156\40\143\x6c\x61\163\163\75\x22\164\x65\x78\164\x2d\147\162\141\171\55\x33\x30\60\40\160\154\55\62\x22\x3e\44\173\x74\141\x62\x6c\145\175\74\x2f\163\160\141\156\76")->source("\57\x64\x65\166\x5f\164\157\x6f\154\163\57\162\x65\x6c\x61\x74\x69\x6f\x6e\57\155\x6f\144\x65\154\137\157\x70\164\151\x6f\x6e\x73")->searchable()]; } protected function service() { goto XjRU7; POIxG: $d76a1->setModelName($this->getArgs("\155\x6f\x64\145\x6c")); goto Jbv3P; XjRU7: $d76a1 = $this->blankService(); goto POIxG; Jbv3P: return $d76a1; goto njv6u; njv6u: } }
