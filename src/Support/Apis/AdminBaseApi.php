<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:43              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminService; use DagaSmart\BizAdmin\Services\AdminApiService; use Illuminate\Database\Eloquent\HigherOrderBuilderProxy; abstract class AdminBaseApi implements AdminApiInterface { public string $title = ''; public string $method = "\141\x6e\x79"; public static $apiRecord; public function getTitle() { return $this->title ?: Str::of(static::class)->explode("\x5c")->pop(); } public function getMethod() { return $this->method; } public function getApiRecord() { goto Ew6_P; Ew6_P: if (self::$apiRecord) { goto yDB9z; } goto oglBJ; G7VFR: yDB9z: goto zMhml; oglBJ: self::$apiRecord = AdminApiService::make()->getApiByTemplate(static::class); goto G7VFR; zMhml: return self::$apiRecord; goto cGifo; cGifo: } public function setApiRecord($s_xQS) { self::$apiRecord = $s_xQS; return $this; } public function getArgs($s_0_B = null, $Cs_8o = null) { goto VjsMq; KysKn: if (!$s_0_B) { goto w1RTw; } goto ZZkz0; ZZkz0: return data_get($nNGiY, $s_0_B, $Cs_8o); goto EXHYB; ohf_f: return $nNGiY; goto ipcgg; VjsMq: $nNGiY = $this->getApiRecord()->args; goto KysKn; EXHYB: w1RTw: goto ohf_f; ipcgg: } public function blankService() { return new class extends AdminService { }; } }
