<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:33              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto vCLLW; qOZeu: if ($Ki_F1) { goto dWSnt; } goto JrZ1N; JrZ1N: return $this->response()->success(); goto Ccerc; ITYTl: $Ki_F1 = $this->service->getApiByPath($nk9G6); goto qOZeu; vCLLW: $nk9G6 = Str::of(request()->path())->replace(Admin::config("\x61\x64\155\x69\156\56\x72\157\165\x74\145\x2e\160\x72\x65\146\151\x78"), '')->value(); goto ITYTl; vEyca: return app($Ki_F1->template)->setApiRecord($Ki_F1)->handle(); goto aMUCX; Ccerc: dWSnt: goto vEyca; aMUCX: } }
