<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:42              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class SchemaQuickEdit extends BaseRenderer { public function body($AHvXX = '') { return $this->set("\x62\157\144\171", $AHvXX); } public function icon($AHvXX = '') { return $this->set("\151\x63\x6f\156", $AHvXX); } public function mode($AHvXX = "\151\x6e\x6c\151\156\x65") { return $this->set("\x6d\x6f\144\x65", $AHvXX); } public function reload($AHvXX = '') { return $this->set("\x72\x65\x6c\157\x61\x64", $AHvXX); } public function resetOnFailed($AHvXX = true) { return $this->set("\162\145\163\x65\164\117\156\106\x61\151\154\x65\x64", $AHvXX); } public function saveImmediately($AHvXX = true) { return $this->set("\x73\x61\166\145\x49\x6d\155\145\x64\x69\x61\x74\x65\x6c\171", $AHvXX); } }
