<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class SchemaQuickEdit extends BaseRenderer { public function body($msRQo = '') { return $this->set("\x62\x6f\x64\x79", $msRQo); } public function icon($msRQo = '') { return $this->set("\151\x63\x6f\156", $msRQo); } public function mode($msRQo = "\151\156\x6c\151\156\x65") { return $this->set("\x6d\x6f\x64\x65", $msRQo); } public function reload($msRQo = '') { return $this->set("\x72\145\154\157\x61\144", $msRQo); } public function resetOnFailed($msRQo = true) { return $this->set("\162\x65\163\x65\x74\117\x6e\106\141\x69\x6c\145\144", $msRQo); } public function saveImmediately($msRQo = true) { return $this->set("\163\141\166\x65\111\155\x6d\x65\144\151\141\164\x65\154\171", $msRQo); } }
