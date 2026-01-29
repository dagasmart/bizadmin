<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:21              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto j_Kqv; IWtda: return $this->response()->success(); goto m5p1m; dt_GR: if ($s4PKi) { goto UjwUq; } goto IWtda; BHZNp: $s4PKi = $this->service->getApiByPath($wSKpS); goto dt_GR; K2Lzm: return app($s4PKi->template)->setApiRecord($s4PKi)->handle(); goto vuRS3; m5p1m: UjwUq: goto K2Lzm; j_Kqv: $wSKpS = Str::of(request()->path())->replace(Admin::config("\x61\x64\155\151\x6e\x2e\x72\x6f\165\164\x65\x2e\x70\162\145\x66\x69\x78"), '')->value(); goto BHZNp; vuRS3: } }
