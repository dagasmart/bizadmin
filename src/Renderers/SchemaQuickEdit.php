<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class SchemaQuickEdit extends BaseRenderer { public function body($JqsAq = '') { return $this->set("\x62\x6f\144\x79", $JqsAq); } public function icon($JqsAq = '') { return $this->set("\151\x63\157\156", $JqsAq); } public function mode($JqsAq = "\151\156\154\151\x6e\145") { return $this->set("\155\157\144\145", $JqsAq); } public function reload($JqsAq = '') { return $this->set("\x72\x65\x6c\157\x61\x64", $JqsAq); } public function resetOnFailed($JqsAq = true) { return $this->set("\162\x65\163\x65\x74\117\x6e\x46\x61\151\154\x65\x64", $JqsAq); } public function saveImmediately($JqsAq = true) { return $this->set("\163\x61\x76\x65\111\155\155\145\144\151\x61\x74\145\154\171", $JqsAq); } }
