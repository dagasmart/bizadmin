<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:17              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\x67\145\x74"; public function getTitle() { return admin_trans("\x61\x64\155\151\x6e\x2e\x61\x70\151\137\x74\x65\x6d\160\x6c\141\164\x65\x73\x2e\144\141\164\x61\137\x64\145\x74\141\151\154"); } public function handle() { $MvDNw = $this->service()->getDetail(request($this->getArgs("\160\x72\x69\x6d\x61\162\x79\x5f\153\x65\171", "\151\144"))); return Admin::response()->success($MvDNw); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\144\x65\154", admin_trans("\141\x64\155\x69\156\x2e\x72\145\x6c\141\x74\151\x6f\x6e\163\x68\x69\x70\x73\x2e\x6d\x6f\x64\145\154"))->required()->menuTpl("\44\x7b\x6c\x61\142\x65\x6c\175\40\74\163\160\141\156\40\x63\154\141\163\163\75\x22\x74\145\170\x74\55\x67\x72\x61\x79\x2d\x33\60\x30\40\160\x6c\55\62\42\x3e\x24\173\164\141\142\154\145\x7d\x3c\57\x73\x70\x61\x6e\x3e")->source("\57\144\145\x76\137\164\157\x6f\x6c\x73\57\162\x65\x6c\x61\164\x69\x6f\x6e\x2f\x6d\157\144\145\154\x5f\x6f\160\x74\151\157\x6e\163")->searchable(), amis()->TextControl("\x70\162\x69\155\x61\162\171\137\x6b\x65\x79", admin_trans("\141\x64\x6d\151\156\56\x63\x6f\144\145\x5f\x67\x65\x6e\x65\x72\141\x74\157\162\163\x2e\160\x72\151\155\x61\x72\171\137\x6b\145\x79"))->value("\x69\x64")]; } protected function service() { goto zXnWE; HI5YH: $d76a1->setModelName($this->getArgs("\155\x6f\x64\145\154")); goto bUCRq; zXnWE: $d76a1 = $this->blankService(); goto HI5YH; bUCRq: return $d76a1; goto WErLj; WErLj: } }
