<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:25              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait ErrorTrait { protected string $error = ''; protected function setError(string $ruKQl) : bool { $this->error = $ruKQl ?: admin_trans("\141\144\x6d\x69\156\x2e\165\156\x6b\x6e\157\167\156\137\x65\x72\x72\157\x72"); return false; } public function getError() : string { return $this->error; } public function hasError() : bool { return !empty($this->error); } }
