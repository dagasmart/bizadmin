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
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\x65\164"; public function getTitle() { return admin_trans("\141\144\x6d\x69\x6e\56\141\160\x69\x5f\x74\145\155\160\154\x61\164\x65\163\56\144\x61\164\141\x5f\154\151\x73\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\157\x64\145\x6c", admin_trans("\141\x64\155\x69\156\x2e\x72\145\x6c\x61\164\x69\x6f\x6e\x73\x68\x69\x70\x73\x2e\x6d\157\144\x65\x6c"))->required()->menuTpl("\x24\173\x6c\x61\142\x65\154\175\x20\x3c\x73\160\x61\156\x20\143\154\141\163\x73\x3d\42\164\145\170\164\x2d\147\x72\141\171\55\x33\x30\x30\40\160\154\55\62\42\76\x24\173\164\141\x62\154\145\x7d\74\57\x73\160\141\156\76")->source("\x2f\x64\x65\166\x5f\164\157\157\154\x73\57\x72\x65\x6c\x61\164\x69\x6f\156\x2f\x6d\157\144\x65\154\x5f\157\x70\x74\x69\x6f\156\163")->searchable()]; } protected function service() { goto CPePz; wrQhG: return $uyp_q; goto Ihdwp; xcByl: $uyp_q->setModelName($this->getArgs("\x6d\157\x64\145\154")); goto wrQhG; CPePz: $uyp_q = $this->blankService(); goto xcByl; Ihdwp: } }
