<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\145\164"; public function getTitle() { return admin_trans("\141\144\x6d\151\156\x2e\141\160\x69\x5f\x74\145\155\x70\x6c\x61\x74\x65\x73\56\x64\x61\164\x61\137\x64\x65\x74\141\x69\x6c"); } public function handle() { $sLb0B = $this->service()->getDetail(request($this->getArgs("\160\162\x69\x6d\141\x72\171\137\x6b\145\171", "\151\144"))); return Admin::response()->success($sLb0B); } public function argsSchema() { return [amis()->SelectControl("\x6d\157\x64\145\x6c", admin_trans("\x61\x64\155\151\156\x2e\162\145\154\141\164\x69\x6f\x6e\163\x68\151\x70\x73\56\x6d\x6f\144\x65\154"))->required()->menuTpl("\44\x7b\154\x61\142\145\x6c\175\40\74\x73\x70\141\156\40\x63\154\x61\x73\163\x3d\42\x74\x65\170\164\55\147\162\141\x79\55\x33\60\x30\40\160\x6c\55\x32\x22\76\x24\x7b\164\x61\142\154\x65\x7d\x3c\57\x73\160\141\156\x3e")->source("\x2f\x64\x65\166\137\x74\x6f\x6f\154\x73\57\162\145\x6c\141\164\x69\x6f\x6e\57\x6d\157\144\x65\x6c\137\x6f\160\x74\151\157\x6e\163")->searchable(), amis()->TextControl("\160\162\x69\x6d\x61\162\x79\x5f\x69\144", admin_trans("\x61\144\155\x69\156\56\143\x6f\x64\145\x5f\x67\x65\156\x65\x72\141\164\157\x72\x73\56\x70\162\151\x6d\x61\x72\x79\x5f\153\x65\171"))->value("\x69\144")]; } protected function service() { goto YLlSr; Ju8Gr: return $ew9eu; goto uTicY; Hy7bS: $ew9eu->setModelName($this->getArgs("\155\157\x64\145\x6c")); goto Ju8Gr; YLlSr: $ew9eu = $this->blankService(); goto Hy7bS; uTicY: } }
