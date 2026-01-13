<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:49              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait ErrorTrait { protected string $error = ''; protected function setError(string $K5BnB) : bool { $this->error = $K5BnB ?: admin_trans("\x61\144\x6d\x69\156\x2e\x75\156\x6b\156\157\x77\156\x5f\145\162\162\157\162"); return false; } public function getError() : string { return $this->error; } public function hasError() : bool { return !empty($this->error); } }
