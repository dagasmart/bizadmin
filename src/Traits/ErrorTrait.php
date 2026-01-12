<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait ErrorTrait { protected string $error = ''; protected function setError(string $FOMWg) : bool { $this->error = $FOMWg ?: admin_trans("\141\144\155\x69\156\56\165\156\x6b\156\157\x77\x6e\137\x65\162\162\x6f\x72"); return false; } public function getError() : string { return $this->error; } public function hasError() : bool { return !empty($this->error); } }
