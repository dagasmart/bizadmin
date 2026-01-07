<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:22              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminService; use DagaSmart\BizAdmin\Services\AdminApiService; use Illuminate\Database\Eloquent\HigherOrderBuilderProxy; abstract class AdminBaseApi implements AdminApiInterface { public string $title = ''; public string $method = "\x61\x6e\x79"; public static $apiRecord; public function getTitle() { return $this->title ?: Str::of(static::class)->explode("\134")->pop(); } public function getMethod() { return $this->method; } public function getApiRecord() { goto MJ_4t; MJ_4t: if (self::$apiRecord) { goto s2bmV; } goto LWE2G; Dx081: s2bmV: goto UkT1a; LWE2G: self::$apiRecord = AdminApiService::make()->getApiByTemplate(static::class); goto Dx081; UkT1a: return self::$apiRecord; goto RjNum; RjNum: } public function setApiRecord($Ma1pK) { self::$apiRecord = $Ma1pK; return $this; } public function getArgs($UgLSm = null, $kbdi2 = null) { goto YM9oB; MVxmS: return $Dz5AX; goto i1IWH; lmuXV: if (!$UgLSm) { goto GTn0e; } goto fLgvy; YM9oB: $Dz5AX = $this->getApiRecord()->args; goto lmuXV; fLgvy: return data_get($Dz5AX, $UgLSm, $kbdi2); goto MiSaT; MiSaT: GTn0e: goto MVxmS; i1IWH: } public function blankService() { return new class extends AdminService { }; } }
