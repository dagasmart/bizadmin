<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:24              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\145\x74"; public function getTitle() { return admin_trans("\x61\144\155\x69\156\x2e\x61\x70\151\x5f\x74\x65\x6d\160\x6c\141\x74\x65\163\56\x64\141\x74\x61\x5f\144\x65\x74\x61\151\154"); } public function handle() { $MvDNw = $this->service()->getDetail(request($this->getArgs("\160\x72\151\x6d\141\x72\x79\x5f\x6b\145\x79", "\151\x64"))); return Admin::response()->success($MvDNw); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\144\145\154", admin_trans("\141\144\155\x69\x6e\x2e\x72\x65\x6c\141\164\151\157\156\x73\x68\x69\160\163\x2e\155\157\144\x65\x6c"))->required()->menuTpl("\x24\x7b\154\x61\142\x65\x6c\175\40\x3c\163\160\141\x6e\x20\143\x6c\x61\163\163\x3d\42\x74\x65\170\x74\55\147\162\x61\171\55\63\x30\x30\x20\x70\154\x2d\62\42\76\x24\173\164\141\x62\x6c\145\x7d\x3c\x2f\x73\160\x61\156\x3e")->source("\57\x64\x65\x76\x5f\x74\x6f\x6f\x6c\163\57\162\145\154\141\x74\x69\x6f\x6e\57\155\157\x64\x65\x6c\x5f\157\x70\x74\151\157\156\163")->searchable(), amis()->TextControl("\x70\x72\x69\x6d\x61\x72\171\x5f\151\x64", admin_trans("\141\144\155\151\x6e\56\143\157\144\145\137\x67\x65\x6e\x65\x72\141\164\157\162\x73\56\160\162\x69\155\141\162\x79\x5f\x6b\x65\x79"))->value("\x69\x64")]; } protected function service() { goto TWKTc; YVAiy: $d76a1->setModelName($this->getArgs("\x6d\157\x64\x65\154")); goto UnHFc; TWKTc: $d76a1 = $this->blankService(); goto YVAiy; UnHFc: return $d76a1; goto QbymP; QbymP: } }
