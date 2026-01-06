<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\145\164"; public function getTitle() { return admin_trans("\x61\144\x6d\x69\156\56\141\160\x69\x5f\164\x65\x6d\160\154\x61\164\x65\163\x2e\x64\x61\x74\x61\137\x64\145\164\141\x69\x6c"); } public function handle() { $lyzrv = $this->service()->getDetail(request($this->getArgs("\x70\x72\x69\155\x61\162\171\137\153\x65\171", "\151\144"))); return Admin::response()->success($lyzrv); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\144\145\154", admin_trans("\x61\144\155\x69\x6e\56\x72\x65\x6c\x61\x74\151\x6f\x6e\163\150\x69\160\x73\x2e\155\157\144\145\154"))->required()->menuTpl("\x24\173\x6c\x61\x62\145\154\175\x20\74\163\160\141\x6e\40\x63\154\x61\163\x73\75\x22\x74\145\x78\164\x2d\147\162\141\x79\55\63\60\60\x20\x70\154\x2d\62\42\76\x24\x7b\164\x61\142\154\x65\x7d\x3c\57\x73\x70\x61\x6e\x3e")->source("\57\x64\145\166\137\x74\x6f\157\x6c\163\57\x72\x65\154\x61\x74\x69\157\156\57\155\x6f\144\145\x6c\x5f\157\160\164\x69\x6f\156\x73")->searchable(), amis()->TextControl("\160\x72\151\x6d\x61\162\171\137\151\144", admin_trans("\141\144\155\x69\x6e\56\143\x6f\x64\145\137\x67\145\x6e\145\162\141\164\x6f\x72\163\x2e\x70\162\x69\155\x61\x72\x79\x5f\x6b\x65\171"))->value("\151\144")]; } protected function service() { goto zI50Q; FvW4k: $nCNh9->setModelName($this->getArgs("\x6d\157\x64\145\x6c")); goto cHAnl; cHAnl: return $nCNh9; goto qiQ8i; zI50Q: $nCNh9 = $this->blankService(); goto FvW4k; qiQ8i: } }
