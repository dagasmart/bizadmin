<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\x67\x65\x74"; public function getTitle() { return admin_trans("\141\x64\155\x69\x6e\x2e\x61\x70\151\x5f\x74\145\x6d\x70\154\x61\x74\x65\163\x2e\144\x61\164\x61\137\x64\x65\164\141\x69\x6c"); } public function handle() { $EBZpG = $this->service()->getDetail(request($this->getArgs("\x70\x72\151\155\141\x72\x79\x5f\x6b\145\171", "\151\144"))); return Admin::response()->success($EBZpG); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\x64\145\154", admin_trans("\x61\x64\155\151\x6e\56\x72\145\x6c\141\x74\x69\x6f\156\163\x68\x69\160\163\56\x6d\x6f\144\145\x6c"))->required()->menuTpl("\x24\x7b\154\141\142\145\x6c\x7d\40\x3c\x73\160\x61\x6e\40\143\x6c\x61\163\x73\75\x22\164\145\x78\x74\x2d\x67\x72\x61\171\x2d\x33\60\60\40\160\x6c\55\62\42\x3e\44\x7b\x74\141\142\154\145\175\74\x2f\x73\160\141\156\76")->source("\x2f\144\x65\x76\x5f\x74\x6f\x6f\x6c\x73\x2f\x72\x65\154\141\x74\151\157\156\57\x6d\x6f\144\x65\154\137\157\160\164\151\157\156\163")->searchable(), amis()->TextControl("\160\162\x69\x6d\141\162\x79\x5f\x69\x64", admin_trans("\141\144\155\x69\x6e\56\x63\x6f\144\145\x5f\147\145\x6e\x65\162\x61\x74\x6f\x72\x73\56\160\162\151\x6d\141\162\171\x5f\153\x65\171"))->value("\x69\x64")]; } protected function service() { goto iUhH2; RZDYI: return $uyp_q; goto KlCd4; iUhH2: $uyp_q = $this->blankService(); goto LAZGV; LAZGV: $uyp_q->setModelName($this->getArgs("\155\x6f\144\145\154")); goto RZDYI; KlCd4: } }
