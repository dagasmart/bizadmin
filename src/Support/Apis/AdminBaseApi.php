<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminService; use DagaSmart\BizAdmin\Services\AdminApiService; use Illuminate\Database\Eloquent\HigherOrderBuilderProxy; abstract class AdminBaseApi implements AdminApiInterface { public string $title = ''; public string $method = "\x61\156\x79"; public static $apiRecord; public function getTitle() { return $this->title ?: Str::of(static::class)->explode("\x5c")->pop(); } public function getMethod() { return $this->method; } public function getApiRecord() { goto Xm05c; Xm05c: if (self::$apiRecord) { goto Ca_Vt; } goto PzdJo; PzdJo: self::$apiRecord = AdminApiService::make()->getApiByTemplate(static::class); goto fIq39; tG0rV: return self::$apiRecord; goto YUdbW; fIq39: Ca_Vt: goto tG0rV; YUdbW: } public function setApiRecord($D2lBV) { self::$apiRecord = $D2lBV; return $this; } public function getArgs($kqXIk = null, $yeMVh = null) { goto lykKv; b4jLv: return $t3cKA; goto kvhhe; lykKv: $t3cKA = $this->getApiRecord()->args; goto CRUfV; n51mM: return data_get($t3cKA, $kqXIk, $yeMVh); goto GcSaU; GcSaU: r3vDX: goto b4jLv; CRUfV: if (!$kqXIk) { goto r3vDX; } goto n51mM; kvhhe: } public function blankService() { return new class extends AdminService { }; } }
