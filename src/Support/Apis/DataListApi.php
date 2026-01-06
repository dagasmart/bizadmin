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
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\x65\164"; public function getTitle() { return admin_trans("\141\x64\x6d\151\x6e\x2e\x61\160\151\x5f\164\145\x6d\x70\154\141\164\x65\x73\x2e\144\141\x74\141\137\x6c\x69\163\x74"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\144\145\154", admin_trans("\x61\x64\155\x69\156\x2e\162\145\x6c\x61\x74\151\x6f\x6e\163\x68\151\160\163\x2e\x6d\157\x64\x65\x6c"))->required()->menuTpl("\44\x7b\154\141\x62\145\x6c\x7d\x20\74\163\160\141\x6e\40\x63\x6c\141\163\163\75\42\x74\x65\x78\x74\x2d\x67\162\141\171\55\x33\x30\x30\40\x70\x6c\x2d\62\42\x3e\44\x7b\164\x61\x62\x6c\x65\x7d\74\x2f\163\160\x61\156\76")->source("\x2f\144\145\166\x5f\164\x6f\157\x6c\x73\57\162\145\x6c\x61\x74\x69\x6f\156\x2f\x6d\157\x64\145\154\137\x6f\160\164\151\157\x6e\x73")->searchable()]; } protected function service() { goto FTBGv; SDuBl: $nCNh9->setModelName($this->getArgs("\155\157\x64\x65\x6c")); goto FIkvh; FTBGv: $nCNh9 = $this->blankService(); goto SDuBl; FIkvh: return $nCNh9; goto oN2ax; oN2ax: } }
