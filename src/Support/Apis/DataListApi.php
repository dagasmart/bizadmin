<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:53              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\x65\x74"; public function getTitle() { return admin_trans("\x61\144\x6d\151\x6e\56\x61\x70\151\137\x74\145\x6d\x70\x6c\x61\x74\145\163\56\144\141\x74\141\137\x6c\x69\163\x74"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\144\145\x6c", admin_trans("\141\x64\155\151\x6e\x2e\162\x65\x6c\141\164\151\157\156\163\150\151\x70\163\56\x6d\157\x64\x65\154"))->required()->menuTpl("\44\x7b\154\141\142\145\x6c\x7d\40\74\x73\x70\141\x6e\40\x63\154\141\163\163\75\42\164\145\x78\164\55\147\162\x61\x79\x2d\63\60\x30\40\160\x6c\55\62\42\x3e\x24\x7b\164\x61\142\x6c\x65\x7d\74\57\163\160\x61\156\76")->source("\x2f\x64\x65\166\x5f\164\157\x6f\154\x73\x2f\x72\x65\x6c\x61\164\x69\157\x6e\x2f\155\x6f\x64\145\x6c\x5f\157\160\x74\151\157\156\x73")->searchable()]; } protected function service() { goto V_i6c; yRnc_: $wZF8b->setModelName($this->getArgs("\155\x6f\144\x65\154")); goto qc1y2; qc1y2: return $wZF8b; goto DgZt0; V_i6c: $wZF8b = $this->blankService(); goto yRnc_; DgZt0: } }
