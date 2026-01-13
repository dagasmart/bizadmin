<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\x67\145\164"; public function getTitle() { return admin_trans("\x61\x64\155\151\x6e\x2e\141\160\151\x5f\164\145\155\160\x6c\x61\164\x65\x73\56\144\141\x74\x61\137\x64\x65\x74\141\x69\x6c"); } public function handle() { $Nc3_h = $this->service()->getDetail(request($this->getArgs("\x70\x72\x69\155\x61\162\x79\137\153\x65\x79", "\151\x64"))); return Admin::response()->success($Nc3_h); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\144\145\x6c", admin_trans("\x61\144\155\x69\x6e\x2e\x72\x65\x6c\141\x74\x69\157\156\x73\x68\151\x70\x73\x2e\155\x6f\x64\145\x6c"))->required()->menuTpl("\44\x7b\x6c\141\x62\145\154\x7d\x20\x3c\x73\x70\141\x6e\40\x63\x6c\141\x73\x73\x3d\42\x74\x65\x78\164\55\x67\162\x61\x79\x2d\63\60\x30\x20\160\x6c\x2d\62\42\x3e\44\x7b\x74\x61\x62\x6c\145\x7d\x3c\x2f\x73\x70\x61\156\76")->source("\x2f\x64\145\x76\x5f\164\157\x6f\154\163\57\162\145\154\141\164\151\157\x6e\57\155\x6f\x64\x65\x6c\x5f\157\160\x74\x69\x6f\x6e\x73")->searchable(), amis()->TextControl("\x70\x72\x69\x6d\x61\162\171\x5f\151\x64", admin_trans("\141\144\155\151\x6e\x2e\143\x6f\x64\x65\x5f\x67\x65\x6e\x65\162\x61\164\x6f\162\x73\x2e\x70\x72\151\155\x61\x72\x79\137\x6b\x65\171"))->value("\151\144")]; } protected function service() { goto oaNGD; Txyxl: return $soEGd; goto O3ZND; e_Yqh: $soEGd->setModelName($this->getArgs("\x6d\x6f\x64\145\x6c")); goto Txyxl; oaNGD: $soEGd = $this->blankService(); goto e_Yqh; O3ZND: } }
