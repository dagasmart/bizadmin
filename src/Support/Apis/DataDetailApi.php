<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:53              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataDetailApi extends AdminBaseApi { public string $method = "\147\145\164"; public function getTitle() { return admin_trans("\141\x64\x6d\x69\x6e\x2e\x61\160\x69\137\164\145\155\x70\154\141\x74\145\163\56\144\141\164\x61\137\x64\145\x74\x61\151\x6c"); } public function handle() { $ABUMy = $this->service()->getDetail(request($this->getArgs("\160\162\x69\x6d\x61\x72\x79\x5f\153\x65\171", "\151\144"))); return Admin::response()->success($ABUMy); } public function argsSchema() { return [amis()->SelectControl("\155\157\144\x65\154", admin_trans("\141\144\x6d\151\156\56\162\x65\154\x61\x74\x69\157\x6e\x73\x68\x69\x70\163\x2e\155\157\x64\145\x6c"))->required()->menuTpl("\44\x7b\x6c\141\142\145\x6c\175\40\x3c\x73\160\141\156\x20\x63\154\x61\163\163\x3d\x22\164\x65\170\x74\x2d\147\x72\141\171\x2d\63\60\60\x20\x70\154\55\62\x22\76\x24\x7b\x74\141\142\154\145\175\x3c\57\x73\x70\x61\x6e\x3e")->source("\x2f\x64\145\166\x5f\164\157\x6f\154\163\57\x72\x65\154\x61\x74\x69\x6f\156\x2f\x6d\157\x64\x65\x6c\137\x6f\x70\x74\151\x6f\156\x73")->searchable(), amis()->TextControl("\160\162\151\155\x61\x72\171\137\x69\x64", admin_trans("\x61\144\x6d\x69\156\x2e\x63\157\144\145\137\x67\145\x6e\145\162\141\x74\157\x72\x73\x2e\160\x72\151\155\x61\x72\x79\x5f\153\145\171"))->value("\x69\144")]; } protected function service() { goto xCxci; xCxci: $wZF8b = $this->blankService(); goto hvdYF; POcIA: return $wZF8b; goto IJDhe; hvdYF: $wZF8b->setModelName($this->getArgs("\x6d\157\144\145\x6c")); goto POcIA; IJDhe: } }
