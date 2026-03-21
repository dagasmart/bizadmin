<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\x67\x65\x74"; public function getTitle() { return admin_trans("\141\144\155\x69\156\x2e\141\x70\x69\137\164\x65\x6d\x70\154\141\x74\x65\x73\x2e\x64\141\164\141\x5f\144\145\x74\x61\151\x6c"); } public function handle() { $Uv4qm = $this->service()->getDetail(request($this->getArgs("\x70\x72\151\x6d\141\x72\x79\x5f\x6b\x65\x79", "\x69\144"))); return Admin::response()->success($Uv4qm); } public function argsSchema() { return [amis()->SelectControl("\155\157\x64\145\x6c", admin_trans("\141\144\x6d\151\156\x2e\162\x65\154\141\x74\151\x6f\x6e\x73\x68\x69\x70\x73\56\155\157\x64\145\154"))->required()->menuTpl("\x24\173\154\x61\142\145\154\175\40\74\163\x70\141\x6e\40\143\154\141\x73\163\x3d\42\x74\145\170\x74\55\147\162\141\171\x2d\63\60\x30\x20\x70\154\x2d\62\x22\x3e\44\x7b\164\141\x62\154\x65\175\x3c\x2f\x73\x70\141\x6e\76")->source("\57\144\145\166\x5f\164\x6f\x6f\154\163\57\x72\x65\154\x61\x74\151\157\156\57\x6d\x6f\144\145\154\x5f\x6f\160\164\151\x6f\x6e\163")->searchable(), amis()->TextControl("\160\162\151\155\141\x72\171\137\153\145\x79", admin_trans("\141\144\x6d\151\156\56\x63\x6f\x64\145\137\x67\145\156\x65\162\141\164\157\x72\x73\56\160\x72\x69\155\141\x72\171\x5f\153\x65\171"))->value("\x69\x64")]; } protected function service() { goto nafpG; nafpG: $tRiFV = $this->blankService(); goto hjYzZ; z8nhI: return $tRiFV; goto fxymO; hjYzZ: $tRiFV->setModelName($this->getArgs("\155\157\x64\145\x6c")); goto z8nhI; fxymO: } }
