<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:17              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminService; use DagaSmart\BizAdmin\Services\AdminApiService; use Illuminate\Database\Eloquent\HigherOrderBuilderProxy; abstract class AdminBaseApi implements AdminApiInterface { public string $title = ''; public string $method = "\141\156\x79"; public static $apiRecord = []; public function getTitle() { return $this->title ?: Str::of(static::class)->explode("\x5c")->pop(); } public function getMethod() { return $this->method; } public function getApiRecord() { goto JRL0A; fOMVC: return self::$apiRecord[static::class]; goto wW4Z4; FUqtU: if (array_key_exists(static::class, self::$apiRecord)) { goto DpraH; } goto tMa7h; vbLSo: XZp_C: goto FUqtU; JRL0A: if (is_array(self::$apiRecord)) { goto XZp_C; } goto XH3ae; tMa7h: self::$apiRecord[static::class] = AdminApiService::make()->getApiByTemplate(static::class); goto nxY9g; XH3ae: self::$apiRecord = []; goto vbLSo; nxY9g: DpraH: goto fOMVC; wW4Z4: } public function setApiRecord($D2lBV) { goto nUEMC; hXIGl: self::$apiRecord[static::class] = $D2lBV; goto qp0gF; iUX5j: ApuPQ: goto hXIGl; qp0gF: return $this; goto EnOBz; nUEMC: if (is_array(self::$apiRecord)) { goto ApuPQ; } goto M7aY_; M7aY_: self::$apiRecord = []; goto iUX5j; EnOBz: } public function getArgs($kqXIk = null, $yeMVh = null) { goto qymOU; fNHAJ: return data_get($t3cKA, $kqXIk, $yeMVh); goto hxFEs; eKqLA: return $t3cKA; goto CdtG9; qymOU: $t3cKA = $this->getApiRecord()->args; goto zxlYS; zxlYS: if (!$kqXIk) { goto NDgbI; } goto fNHAJ; hxFEs: NDgbI: goto eKqLA; CdtG9: } public function blankService() { return new class extends AdminService { }; } }
