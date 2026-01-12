<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait ErrorTrait { protected string $error = ''; protected function setError(string $gJxhq) : bool { $this->error = $gJxhq ?: admin_trans("\x61\144\155\151\156\56\165\x6e\x6b\156\157\167\156\137\145\162\162\157\x72"); return false; } public function getError() : string { return $this->error; } public function hasError() : bool { return !empty($this->error); } }
