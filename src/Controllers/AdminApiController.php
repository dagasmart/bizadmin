<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto u0nEY; u0nEY: $X7GL0 = Str::of(request()->path())->replace(Admin::config("\141\144\x6d\151\x6e\x2e\x72\157\165\x74\145\56\x70\162\145\x66\x69\170"), '')->value(); goto I3Umu; I3Umu: $s7hFN = $this->service->getApiByPath($X7GL0); goto oWG7X; cluih: BQ1PM: goto sahHw; oWG7X: if ($s7hFN) { goto BQ1PM; } goto NZs5p; NZs5p: return $this->response()->success(); goto cluih; sahHw: return app($s7hFN->template)->setApiRecord($s7hFN)->handle(); goto sGsmi; sGsmi: } }
