<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminService; use DagaSmart\BizAdmin\Services\AdminApiService; use Illuminate\Database\Eloquent\HigherOrderBuilderProxy; abstract class AdminBaseApi implements AdminApiInterface { public string $title = ''; public string $method = "\141\x6e\x79"; public static $apiRecord; public function getTitle() { return $this->title ?: Str::of(static::class)->explode("\134")->pop(); } public function getMethod() { return $this->method; } public function getApiRecord() { goto jvj2h; jvj2h: if (self::$apiRecord) { goto hwNhq; } goto sVP7x; SwEkO: hwNhq: goto tFrEZ; sVP7x: self::$apiRecord = AdminApiService::make()->getApiByTemplate(static::class); goto SwEkO; tFrEZ: return self::$apiRecord; goto iB4rc; iB4rc: } public function setApiRecord($u2Q2K) { self::$apiRecord = $u2Q2K; return $this; } public function getArgs($NkVp_ = null, $UVE4E = null) { goto LHv26; d8BMv: bZYyG: goto S9N10; ptPrI: if (!$NkVp_) { goto bZYyG; } goto rvX1S; S9N10: return $RWJXL; goto l9NLL; rvX1S: return data_get($RWJXL, $NkVp_, $UVE4E); goto d8BMv; LHv26: $RWJXL = $this->getApiRecord()->args; goto ptPrI; l9NLL: } public function blankService() { return new class extends AdminService { }; } }
