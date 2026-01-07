<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\145\x74"; public function getTitle() { return admin_trans("\141\144\155\151\156\56\141\160\151\137\164\x65\155\160\x6c\141\x74\x65\163\56\x64\141\164\141\x5f\x64\145\164\x61\151\154"); } public function handle() { $yLUxg = $this->service()->getDetail(request($this->getArgs("\x70\162\151\155\x61\x72\x79\x5f\153\x65\x79", "\151\x64"))); return Admin::response()->success($yLUxg); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\144\145\x6c", admin_trans("\x61\144\155\x69\x6e\56\x72\145\154\x61\x74\151\157\x6e\x73\150\x69\160\x73\x2e\x6d\x6f\144\145\154"))->required()->menuTpl("\x24\173\x6c\x61\142\x65\x6c\175\x20\x3c\x73\x70\141\x6e\40\x63\x6c\141\163\163\x3d\x22\x74\x65\x78\x74\55\147\162\x61\171\x2d\x33\x30\x30\40\160\x6c\x2d\x32\42\x3e\x24\x7b\x74\141\x62\x6c\145\x7d\74\57\163\x70\x61\156\76")->source("\57\144\x65\x76\137\164\x6f\x6f\x6c\x73\x2f\162\x65\x6c\141\x74\151\157\156\x2f\155\157\x64\x65\154\137\157\x70\x74\x69\157\156\x73")->searchable(), amis()->TextControl("\160\x72\151\x6d\x61\162\x79\137\x69\144", admin_trans("\141\144\155\x69\x6e\x2e\143\157\x64\145\137\147\145\156\145\x72\141\164\157\162\163\56\x70\x72\151\x6d\x61\162\x79\x5f\x6b\x65\x79"))->value("\x69\x64")]; } protected function service() { goto hrZeO; hS1dM: return $LwVUQ; goto POADu; GQONh: $LwVUQ->setModelName($this->getArgs("\x6d\x6f\x64\145\x6c")); goto hS1dM; hrZeO: $LwVUQ = $this->blankService(); goto GQONh; POADu: } }
