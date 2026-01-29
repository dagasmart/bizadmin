<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:42              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait ErrorTrait { protected string $error = ''; protected function setError(string $Angkg) : bool { $this->error = $Angkg ?: admin_trans("\x61\x64\155\151\x6e\56\x75\156\x6b\156\157\x77\x6e\137\x65\162\162\157\162"); return false; } public function getError() : string { return $this->error; } public function hasError() : bool { return !empty($this->error); } }
