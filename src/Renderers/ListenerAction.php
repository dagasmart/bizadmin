<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ListenerAction extends BaseRenderer { public function __construct() { } public function actionType($PfrF0 = '') { return $this->set("\x61\x63\x74\x69\x6f\x6e\x54\x79\x70\x65", $PfrF0); } public function args($PfrF0 = '') { return $this->set("\141\x72\147\x73", $PfrF0); } public function componentId($PfrF0 = '') { return $this->set("\143\157\155\x70\x6f\x6e\145\156\164\111\x64", $PfrF0); } public function componentName($PfrF0 = '') { return $this->set("\143\157\155\x70\157\156\145\x6e\164\x4e\x61\x6d\145", $PfrF0); } public function confirmTitle($PfrF0 = '') { return $this->set("\143\x6f\156\146\x69\162\155\124\151\164\154\x65", $PfrF0); } public function data($PfrF0 = '') { return $this->set("\x64\141\x74\141", $PfrF0); } public function dataMergeMode($PfrF0 = '') { return $this->set("\144\x61\x74\141\115\x65\162\147\145\x4d\x6f\x64\x65", $PfrF0); } public function description($PfrF0 = '') { return $this->set("\x64\145\x73\143\x72\151\160\x74\151\157\x6e", $PfrF0); } public function execOn($PfrF0 = '') { return $this->set("\145\170\x65\x63\x4f\x6e", $PfrF0); } public function expression($PfrF0 = '') { return $this->set("\145\170\x70\x72\145\163\x73\151\157\156", $PfrF0); } public function ignoreError($PfrF0 = true) { return $this->set("\x69\147\x6e\x6f\162\145\105\162\x72\x6f\162", $PfrF0); } public function outputVar($PfrF0 = '') { return $this->set("\x6f\165\164\160\165\164\x56\x61\162", $PfrF0); } public function preventDefault($PfrF0 = true) { return $this->set("\160\x72\145\x76\x65\156\x74\104\x65\x66\141\165\154\164", $PfrF0); } public function stopPropagation($PfrF0 = true) { return $this->set("\x73\x74\x6f\160\x50\162\x6f\160\x61\x67\141\164\x69\x6f\156", $PfrF0); } }
