<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return admin_trans("\x61\144\x6d\x69\156\x2e\141\x70\x69\x5f\164\x65\155\x70\154\141\164\145\163\x2e\x64\141\x74\141\x5f\154\x69\163\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\x6d\157\144\145\x6c", admin_trans("\141\144\x6d\x69\156\56\162\x65\154\x61\x74\x69\x6f\x6e\163\150\x69\160\x73\56\155\157\144\145\154"))->required()->menuTpl("\44\x7b\x6c\x61\142\145\x6c\x7d\x20\74\x73\x70\x61\156\x20\x63\154\x61\163\x73\x3d\x22\164\x65\170\x74\x2d\147\162\x61\171\55\63\x30\60\40\160\154\x2d\62\x22\x3e\x24\173\x74\141\142\x6c\145\175\74\x2f\163\x70\141\x6e\76")->source("\x2f\144\x65\166\x5f\164\x6f\157\154\x73\57\162\145\154\x61\164\x69\x6f\156\x2f\x6d\x6f\144\x65\154\137\x6f\160\164\x69\157\x6e\163")->searchable()]; } protected function service() { goto Qycy8; VngX8: $NWqxX->setModelName($this->getArgs("\x6d\157\144\x65\154")); goto jJJSM; jJJSM: return $NWqxX; goto ZBKbO; Qycy8: $NWqxX = $this->blankService(); goto VngX8; ZBKbO: } }
