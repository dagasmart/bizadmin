<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\145\164"; public function getTitle() { return admin_trans("\141\144\155\x69\x6e\56\x61\x70\x69\137\164\145\x6d\x70\154\x61\164\145\x73\56\144\x61\164\141\137\x6c\151\x73\x74"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\x6d\157\144\145\154", admin_trans("\x61\144\155\151\x6e\56\x72\x65\154\x61\x74\x69\x6f\156\163\x68\x69\160\x73\x2e\155\157\x64\145\154"))->required()->menuTpl("\x24\x7b\154\141\x62\x65\x6c\x7d\x20\x3c\163\160\141\x6e\x20\x63\x6c\141\x73\163\75\42\164\145\x78\x74\x2d\x67\162\141\x79\x2d\63\60\60\40\x70\x6c\x2d\62\42\76\x24\173\x74\141\x62\154\145\175\x3c\57\x73\x70\x61\156\76")->source("\x2f\x64\x65\166\x5f\164\x6f\157\x6c\x73\x2f\162\x65\x6c\141\164\151\x6f\x6e\57\x6d\157\x64\145\154\137\157\160\x74\151\x6f\x6e\x73")->searchable()]; } protected function service() { goto kFa0s; ugrLm: return $g_7Wr; goto eG0v7; HdcYl: $g_7Wr->setModelName($this->getArgs("\155\157\144\145\x6c")); goto ugrLm; kFa0s: $g_7Wr = $this->blankService(); goto HdcYl; eG0v7: } }
