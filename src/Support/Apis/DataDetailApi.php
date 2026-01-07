<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\145\x74"; public function getTitle() { return admin_trans("\141\x64\155\x69\x6e\x2e\141\160\x69\137\x74\x65\155\160\154\x61\x74\x65\x73\x2e\144\141\164\x61\137\144\145\164\x61\x69\154"); } public function handle() { $OFJRl = $this->service()->getDetail(request($this->getArgs("\160\x72\x69\x6d\x61\162\x79\x5f\x6b\145\171", "\151\x64"))); return Admin::response()->success($OFJRl); } public function argsSchema() { return [amis()->SelectControl("\155\157\144\145\x6c", admin_trans("\141\x64\x6d\x69\x6e\56\162\145\154\141\x74\x69\x6f\156\x73\150\x69\x70\x73\56\x6d\157\x64\x65\x6c"))->required()->menuTpl("\x24\173\154\141\x62\x65\154\x7d\40\74\x73\160\x61\x6e\40\x63\x6c\x61\x73\163\75\x22\x74\145\x78\x74\x2d\147\x72\141\x79\x2d\x33\x30\x30\40\x70\154\55\x32\x22\76\44\173\x74\x61\x62\154\145\x7d\74\57\163\160\x61\156\76")->source("\x2f\144\145\166\137\164\x6f\x6f\154\x73\x2f\162\145\154\x61\164\x69\157\x6e\x2f\x6d\x6f\144\145\x6c\x5f\157\160\164\151\157\156\163")->searchable(), amis()->TextControl("\160\x72\x69\x6d\141\x72\x79\137\x69\x64", admin_trans("\x61\144\x6d\151\x6e\56\143\x6f\x64\145\x5f\147\x65\156\x65\162\x61\164\157\x72\x73\56\160\162\x69\x6d\x61\x72\x79\137\x6b\x65\171"))->value("\151\144")]; } protected function service() { goto aLR1k; tihQ3: $cfXhw->setModelName($this->getArgs("\x6d\x6f\144\x65\x6c")); goto h2ggQ; h2ggQ: return $cfXhw; goto S5RxF; aLR1k: $cfXhw = $this->blankService(); goto tihQ3; S5RxF: } }
