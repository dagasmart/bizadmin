<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:19              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto MHi44; LCGfw: return app($bn17g->template)->setApiRecord($bn17g)->handle(); goto Lmoq4; qJPQY: oygFy: goto LCGfw; MHi44: $zlKvU = Str::of(request()->path())->replace(Admin::config("\x61\144\155\151\156\56\162\x6f\x75\x74\145\56\160\x72\x65\x66\151\170"), '')->value(); goto LLIyV; KcyY1: return $this->response()->success(); goto qJPQY; LLIyV: $bn17g = $this->service->getApiByPath($zlKvU); goto CJgLH; CJgLH: if ($bn17g) { goto oygFy; } goto KcyY1; Lmoq4: } }
