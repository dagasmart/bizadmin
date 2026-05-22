<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:21              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\x67\x65\164"; public function getTitle() { return admin_trans("\x61\x64\x6d\x69\156\56\x61\160\151\x5f\164\x65\x6d\x70\154\x61\164\x65\x73\x2e\144\141\x74\x61\137\x64\145\164\x61\151\154"); } public function handle() { $MvDNw = $this->service()->getDetail(request($this->getArgs("\160\162\151\155\141\162\171\137\153\x65\171", "\151\x64"))); return Admin::response()->success($MvDNw); } public function argsSchema() { return [amis()->SelectControl("\155\157\144\x65\x6c", admin_trans("\x61\x64\155\151\x6e\56\162\145\x6c\141\164\151\x6f\156\163\x68\x69\x70\x73\56\155\157\144\x65\154"))->required()->menuTpl("\x24\173\x6c\141\x62\x65\x6c\x7d\40\74\163\x70\x61\x6e\40\143\x6c\141\x73\163\x3d\x22\164\x65\170\x74\x2d\147\x72\x61\x79\x2d\x33\x30\60\x20\x70\154\55\x32\42\76\44\x7b\x74\x61\x62\154\x65\175\x3c\x2f\163\x70\x61\x6e\x3e")->source("\57\144\x65\166\x5f\164\x6f\157\154\163\57\162\145\154\x61\164\x69\x6f\x6e\57\155\x6f\x64\x65\154\137\x6f\160\x74\151\157\156\163")->searchable(), amis()->TextControl("\160\x72\x69\x6d\141\162\x79\137\153\145\171", admin_trans("\141\x64\155\x69\156\x2e\143\157\144\145\x5f\147\145\x6e\145\162\141\164\157\162\163\x2e\160\x72\151\155\x61\162\x79\x5f\x6b\145\x79"))->value("\151\144")]; } protected function service() { goto uwcjP; uwcjP: $d76a1 = $this->blankService(); goto F5cP8; cWJ6D: return $d76a1; goto loNUc; F5cP8: $d76a1->setModelName($this->getArgs("\x6d\157\x64\145\154")); goto cWJ6D; loNUc: } }
