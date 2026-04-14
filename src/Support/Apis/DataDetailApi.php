<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\x65\x74"; public function getTitle() { return admin_trans("\x61\144\x6d\151\x6e\x2e\x61\x70\x69\x5f\x74\x65\x6d\160\x6c\141\164\x65\163\x2e\144\141\x74\x61\x5f\x64\145\x74\x61\x69\154"); } public function handle() { $MvDNw = $this->service()->getDetail(request($this->getArgs("\x70\162\151\155\141\x72\x79\x5f\153\145\171", "\151\x64"))); return Admin::response()->success($MvDNw); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\x64\145\x6c", admin_trans("\x61\144\155\x69\x6e\x2e\x72\x65\x6c\x61\x74\x69\x6f\x6e\163\150\x69\160\x73\56\x6d\x6f\x64\145\154"))->required()->menuTpl("\x24\173\x6c\141\x62\145\x6c\175\x20\x3c\163\x70\x61\x6e\x20\143\154\141\163\x73\75\x22\164\x65\170\x74\55\x67\x72\x61\x79\x2d\x33\x30\60\x20\160\x6c\55\62\x22\x3e\x24\x7b\x74\x61\x62\154\145\175\x3c\57\x73\160\141\x6e\x3e")->source("\57\144\145\x76\x5f\x74\157\157\154\163\57\162\x65\154\x61\164\151\157\156\x2f\x6d\x6f\x64\145\154\x5f\x6f\x70\x74\151\x6f\x6e\x73")->searchable(), amis()->TextControl("\x70\x72\151\x6d\x61\162\x79\x5f\153\x65\x79", admin_trans("\141\144\x6d\x69\x6e\x2e\x63\x6f\144\x65\137\x67\x65\x6e\145\162\141\x74\x6f\x72\x73\56\x70\162\x69\x6d\141\x72\171\x5f\153\x65\171"))->value("\151\x64")]; } protected function service() { goto C4ARw; C4ARw: $d76a1 = $this->blankService(); goto ktu4g; ktu4g: $d76a1->setModelName($this->getArgs("\155\x6f\x64\145\154")); goto BdWvz; BdWvz: return $d76a1; goto ZPc5d; ZPc5d: } }
