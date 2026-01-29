<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminService; use DagaSmart\BizAdmin\Services\AdminApiService; use Illuminate\Database\Eloquent\HigherOrderBuilderProxy; abstract class AdminBaseApi implements AdminApiInterface { public string $title = ''; public string $method = "\x61\x6e\171"; public static $apiRecord; public function getTitle() { return $this->title ?: Str::of(static::class)->explode("\134")->pop(); } public function getMethod() { return $this->method; } public function getApiRecord() { goto vK8Pn; vK8Pn: if (self::$apiRecord) { goto n0i89; } goto C1TXE; C1TXE: self::$apiRecord = AdminApiService::make()->getApiByTemplate(static::class); goto z3GMu; VAKwA: return self::$apiRecord; goto KQIx3; z3GMu: n0i89: goto VAKwA; KQIx3: } public function setApiRecord($VwrZx) { self::$apiRecord = $VwrZx; return $this; } public function getArgs($KrK3o = null, $d0eKH = null) { goto xaJBy; xaJBy: $ci_Ea = $this->getApiRecord()->args; goto G88K1; bjhgv: return data_get($ci_Ea, $KrK3o, $d0eKH); goto qIxil; qIxil: PNrgq: goto uXW50; G88K1: if (!$KrK3o) { goto PNrgq; } goto bjhgv; uXW50: return $ci_Ea; goto Q54yK; Q54yK: } public function blankService() { return new class extends AdminService { }; } }
