<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto Okj0o; b8pyu: return $this->response()->success(); goto tAC3h; DOvdO: return app($jo_BC->template)->setApiRecord($jo_BC)->handle(); goto m5a9F; tAC3h: FubuC: goto DOvdO; Okj0o: $e01IC = Str::of(request()->path())->replace(Admin::config("\141\x64\x6d\151\156\56\162\157\x75\x74\145\56\x70\162\145\146\151\x78"), '')->value(); goto SpDr3; h2hmG: if ($jo_BC) { goto FubuC; } goto b8pyu; SpDr3: $jo_BC = $this->service->getApiByPath($e01IC); goto h2hmG; m5a9F: } }
