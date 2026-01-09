<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait ErrorTrait { protected string $error = ''; protected function setError(string $foD4m) : bool { $this->error = $foD4m ?: admin_trans("\141\144\155\x69\x6e\x2e\165\156\153\156\x6f\x77\x6e\x5f\x65\162\x72\157\x72"); return false; } public function getError() : string { return $this->error; } public function hasError() : bool { return !empty($this->error); } }
