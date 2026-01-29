<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class SchemaQuickEdit extends BaseRenderer { public function body($PfrF0 = '') { return $this->set("\x62\x6f\x64\x79", $PfrF0); } public function icon($PfrF0 = '') { return $this->set("\151\143\157\156", $PfrF0); } public function mode($PfrF0 = "\x69\x6e\x6c\x69\x6e\x65") { return $this->set("\155\157\144\x65", $PfrF0); } public function reload($PfrF0 = '') { return $this->set("\x72\x65\x6c\157\x61\144", $PfrF0); } public function resetOnFailed($PfrF0 = true) { return $this->set("\162\x65\163\145\164\x4f\x6e\x46\x61\151\154\145\144", $PfrF0); } public function saveImmediately($PfrF0 = true) { return $this->set("\x73\x61\166\x65\x49\155\155\x65\144\x69\141\164\145\x6c\x79", $PfrF0); } }
