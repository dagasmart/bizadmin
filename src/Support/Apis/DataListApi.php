<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\x65\x74"; public function getTitle() { return admin_trans("\141\x64\x6d\151\156\56\141\160\151\137\x74\145\x6d\x70\x6c\141\x74\x65\163\x2e\144\x61\x74\x61\x5f\154\x69\163\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\x6d\x6f\x64\145\154", admin_trans("\141\x64\x6d\151\156\x2e\162\x65\x6c\x61\x74\151\157\x6e\163\x68\151\x70\163\x2e\x6d\x6f\144\145\x6c"))->required()->menuTpl("\44\x7b\x6c\x61\142\x65\154\x7d\40\x3c\163\160\141\x6e\x20\x63\154\141\x73\163\x3d\42\x74\145\x78\x74\55\147\162\x61\x79\55\x33\60\60\40\160\x6c\55\62\42\x3e\44\173\164\141\142\154\x65\175\74\x2f\x73\160\141\x6e\x3e")->source("\x2f\144\145\166\x5f\164\x6f\x6f\154\163\x2f\162\x65\154\x61\x74\x69\x6f\x6e\57\x6d\x6f\144\x65\x6c\137\157\x70\164\x69\157\156\x73")->searchable()]; } protected function service() { goto wNMjB; iVFJr: return $tRiFV; goto WJrLs; r70LI: $tRiFV->setModelName($this->getArgs("\x6d\x6f\x64\145\154")); goto iVFJr; wNMjB: $tRiFV = $this->blankService(); goto r70LI; WJrLs: } }
