<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return admin_trans("\141\x64\155\x69\156\x2e\x61\x70\x69\x5f\164\x65\x6d\160\154\x61\164\x65\163\56\x64\141\x74\x61\x5f\x64\145\x74\141\x69\154"); } public function handle() { $Scqzw = $this->service()->getDetail(request($this->getArgs("\x70\x72\x69\155\141\x72\x79\x5f\x6b\145\171", "\151\x64"))); return Admin::response()->success($Scqzw); } public function argsSchema() { return [amis()->SelectControl("\155\157\144\145\x6c", admin_trans("\x61\144\x6d\151\156\56\x72\x65\154\141\164\x69\157\x6e\163\x68\151\160\x73\56\x6d\x6f\x64\x65\154"))->required()->menuTpl("\44\x7b\154\141\142\145\x6c\175\x20\x3c\163\x70\x61\x6e\x20\143\x6c\141\x73\163\x3d\42\164\x65\170\x74\55\147\x72\x61\x79\55\63\60\x30\x20\160\154\55\x32\42\x3e\x24\x7b\x74\x61\142\x6c\x65\175\74\57\x73\160\x61\x6e\x3e")->source("\x2f\144\145\166\137\x74\x6f\157\x6c\x73\57\162\x65\x6c\x61\164\x69\157\x6e\x2f\155\157\144\145\154\137\x6f\x70\164\x69\157\156\x73")->searchable(), amis()->TextControl("\x70\x72\x69\155\x61\162\171\137\x69\144", admin_trans("\x61\x64\155\x69\156\56\143\x6f\144\145\x5f\x67\145\156\x65\x72\x61\164\157\162\163\56\x70\x72\x69\155\141\162\x79\137\153\145\171"))->value("\x69\x64")]; } protected function service() { goto WW9Gr; mIrhK: return $pct61; goto lYUPJ; rzQoR: $pct61->setModelName($this->getArgs("\x6d\x6f\x64\145\154")); goto mIrhK; WW9Gr: $pct61 = $this->blankService(); goto rzQoR; lYUPJ: } }
