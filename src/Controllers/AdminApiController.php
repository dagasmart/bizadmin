<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:57              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto k5ApS; d6UUB: EjYaQ: goto BqtQH; k5ApS: $doLfm = Str::of(request()->path())->replace(Admin::config("\141\144\x6d\x69\156\x2e\x72\x6f\165\x74\145\56\160\x72\x65\146\x69\x78"), '')->value(); goto gmjnd; BqtQH: return app($dUR9E->template)->setApiRecord($dUR9E)->handle(); goto XcsHI; SM0Pw: return $this->response()->success(); goto d6UUB; lNKUB: if ($dUR9E) { goto EjYaQ; } goto SM0Pw; gmjnd: $dUR9E = $this->service->getApiByPath($doLfm); goto lNKUB; XcsHI: } }
