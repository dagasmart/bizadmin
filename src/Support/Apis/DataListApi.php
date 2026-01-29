<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\145\x74"; public function getTitle() { return admin_trans("\x61\x64\x6d\x69\156\56\141\x70\151\x5f\164\x65\155\x70\154\141\164\145\x73\56\144\141\164\x61\137\x6c\151\163\x74"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\157\144\x65\x6c", admin_trans("\141\x64\x6d\x69\x6e\56\162\x65\154\141\164\151\157\156\163\150\x69\x70\163\56\155\x6f\144\145\154"))->required()->menuTpl("\x24\x7b\154\x61\x62\x65\154\x7d\40\74\x73\x70\141\156\x20\143\x6c\x61\163\163\75\x22\x74\145\170\x74\x2d\147\162\141\171\55\63\x30\60\x20\x70\154\x2d\62\42\x3e\x24\x7b\164\141\x62\x6c\145\x7d\74\57\x73\160\x61\x6e\x3e")->source("\x2f\144\x65\166\x5f\x74\157\x6f\x6c\163\57\162\x65\x6c\141\x74\151\157\156\57\155\x6f\x64\x65\x6c\137\157\x70\164\x69\157\156\163")->searchable()]; } protected function service() { goto czJjv; EIA2s: return $pct61; goto MjHPT; blbQ7: $pct61->setModelName($this->getArgs("\155\x6f\144\x65\154")); goto EIA2s; czJjv: $pct61 = $this->blankService(); goto blbQ7; MjHPT: } }
