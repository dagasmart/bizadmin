<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\147\145\164"; public function getTitle() { return admin_trans("\141\144\x6d\151\156\56\141\x70\151\137\164\x65\155\160\154\141\164\145\163\56\x64\x61\x74\141\137\154\x69\163\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\x64\x65\x6c", admin_trans("\141\x64\x6d\x69\156\x2e\x72\x65\154\x61\x74\x69\x6f\x6e\x73\150\151\160\x73\x2e\x6d\157\x64\x65\154"))->required()->menuTpl("\44\x7b\x6c\x61\142\145\154\175\40\x3c\x73\x70\x61\x6e\x20\143\x6c\x61\x73\x73\x3d\x22\164\145\170\x74\55\x67\162\141\171\55\x33\x30\x30\x20\160\154\x2d\x32\42\76\x24\x7b\164\141\x62\154\145\175\x3c\57\163\x70\141\x6e\76")->source("\57\x64\145\166\137\x74\157\157\154\x73\x2f\162\x65\154\x61\x74\151\x6f\x6e\57\x6d\x6f\144\145\154\137\157\x70\x74\151\157\x6e\163")->searchable()]; } protected function service() { goto nUMPk; oRFzc: return $aY2_h; goto gwy6y; nUMPk: $aY2_h = $this->blankService(); goto ZrDS_; ZrDS_: $aY2_h->setModelName($this->getArgs("\x6d\157\x64\145\154")); goto oRFzc; gwy6y: } }
