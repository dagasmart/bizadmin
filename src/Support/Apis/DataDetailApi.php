<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\x67\x65\164"; public function getTitle() { return admin_trans("\141\x64\155\151\156\56\141\x70\x69\x5f\164\145\155\160\154\x61\164\145\x73\56\144\141\x74\141\137\144\x65\x74\x61\x69\x6c"); } public function handle() { $tek9W = $this->service()->getDetail(request($this->getArgs("\x70\x72\x69\x6d\x61\x72\171\x5f\x6b\145\171", "\x69\144"))); return Admin::response()->success($tek9W); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\144\x65\x6c", admin_trans("\x61\144\155\x69\156\x2e\x72\145\154\x61\x74\151\x6f\156\x73\x68\151\x70\x73\x2e\155\157\x64\x65\154"))->required()->menuTpl("\44\x7b\x6c\x61\x62\x65\x6c\x7d\40\x3c\x73\x70\141\156\40\x63\154\141\x73\163\75\42\x74\145\170\x74\x2d\x67\x72\x61\x79\55\x33\60\60\40\160\154\55\x32\42\76\44\173\x74\x61\142\x6c\145\175\74\57\x73\160\x61\x6e\76")->source("\57\x64\145\166\x5f\164\x6f\x6f\154\x73\x2f\x72\145\154\141\164\x69\x6f\156\57\155\x6f\x64\145\154\137\157\x70\164\x69\157\x6e\x73")->searchable(), amis()->TextControl("\x70\162\x69\x6d\x61\162\171\137\x69\144", admin_trans("\x61\144\155\151\156\x2e\x63\157\144\x65\137\147\x65\156\x65\162\x61\x74\x6f\x72\163\56\160\162\151\155\x61\x72\x79\137\153\145\171"))->value("\151\144")]; } protected function service() { goto dVi38; Yhg3C: $g_7Wr->setModelName($this->getArgs("\155\x6f\x64\x65\154")); goto hOMDp; dVi38: $g_7Wr = $this->blankService(); goto Yhg3C; hOMDp: return $g_7Wr; goto HVy1z; HVy1z: } }
