<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait ErrorTrait { protected string $error = ''; protected function setError(string $wtbOn) : bool { $this->error = $wtbOn ?: admin_trans("\x61\144\x6d\x69\156\56\x75\156\x6b\x6e\157\x77\156\137\x65\x72\162\157\162"); return false; } public function getError() : string { return $this->error; } public function hasError() : bool { return !empty($this->error); } }
