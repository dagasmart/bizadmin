<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\x65\164"; public function getTitle() { return admin_trans("\141\144\155\x69\156\56\141\x70\x69\137\164\145\155\x70\x6c\x61\x74\x65\163\56\144\x61\164\x61\x5f\x64\145\x74\141\151\154"); } public function handle() { $iYkCE = $this->service()->getDetail(request($this->getArgs("\x70\162\151\155\141\162\x79\137\x6b\145\x79", "\151\x64"))); return Admin::response()->success($iYkCE); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\144\x65\x6c", admin_trans("\x61\x64\x6d\x69\x6e\x2e\162\145\x6c\141\x74\x69\x6f\x6e\163\150\151\160\163\x2e\x6d\x6f\144\145\154"))->required()->menuTpl("\x24\173\x6c\141\142\145\x6c\175\40\x3c\x73\x70\141\156\40\x63\x6c\x61\x73\163\75\42\164\x65\170\x74\55\x67\162\141\x79\x2d\63\x30\60\x20\160\154\55\x32\x22\x3e\44\173\x74\141\142\154\x65\x7d\74\57\163\x70\141\x6e\76")->source("\x2f\x64\x65\x76\137\164\157\x6f\154\163\x2f\x72\145\154\141\x74\x69\x6f\156\x2f\x6d\157\144\x65\x6c\137\x6f\160\x74\151\x6f\x6e\163")->searchable(), amis()->TextControl("\x70\x72\151\x6d\141\x72\x79\137\x69\x64", admin_trans("\141\144\x6d\x69\156\x2e\x63\157\x64\145\137\147\145\156\x65\162\x61\x74\x6f\x72\x73\x2e\x70\x72\x69\x6d\141\x72\x79\x5f\153\x65\x79"))->value("\x69\x64")]; } protected function service() { goto pbylf; Uk6We: $C1aYf->setModelName($this->getArgs("\x6d\157\x64\x65\154")); goto Y3MYP; Y3MYP: return $C1aYf; goto UWLF_; pbylf: $C1aYf = $this->blankService(); goto Uk6We; UWLF_: } }
