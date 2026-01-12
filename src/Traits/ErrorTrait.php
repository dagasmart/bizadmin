<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:01              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait ErrorTrait { protected string $error = ''; protected function setError(string $aHyHh) : bool { $this->error = $aHyHh ?: admin_trans("\x61\x64\x6d\151\x6e\x2e\x75\x6e\x6b\156\157\x77\156\x5f\145\162\x72\157\162"); return false; } public function getError() : string { return $this->error; } public function hasError() : bool { return !empty($this->error); } }
