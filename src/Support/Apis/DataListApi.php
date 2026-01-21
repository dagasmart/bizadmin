<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\147\145\x74"; public function getTitle() { return admin_trans("\141\x64\x6d\x69\x6e\56\141\x70\x69\137\164\x65\155\x70\154\x61\164\145\x73\x2e\144\141\164\141\137\x6c\x69\163\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\x64\145\x6c", admin_trans("\x61\144\155\x69\x6e\56\x72\145\154\141\x74\x69\x6f\156\x73\150\x69\160\163\56\x6d\157\x64\x65\x6c"))->required()->menuTpl("\44\x7b\154\141\142\145\x6c\x7d\40\x3c\163\x70\x61\156\x20\x63\154\141\x73\x73\x3d\42\164\145\x78\164\x2d\147\x72\x61\171\55\63\x30\x30\40\x70\154\x2d\62\42\76\44\173\x74\141\142\x6c\145\175\74\x2f\x73\160\141\156\76")->source("\x2f\144\x65\166\137\164\157\157\154\x73\57\x72\145\154\x61\164\x69\157\156\x2f\x6d\157\x64\145\154\137\x6f\x70\x74\151\157\156\x73")->searchable()]; } protected function service() { goto JATLZ; N9o3_: $ew9eu->setModelName($this->getArgs("\x6d\157\144\x65\154")); goto aX44B; aX44B: return $ew9eu; goto yAoyW; JATLZ: $ew9eu = $this->blankService(); goto N9o3_; yAoyW: } }
