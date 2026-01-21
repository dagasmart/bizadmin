<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto nHgtQ; GdXYF: $mAcmM = $this->service->getApiByPath($XVxRx); goto Ax5xZ; C1t3z: return app($mAcmM->template)->setApiRecord($mAcmM)->handle(); goto wLSeD; nHgtQ: $XVxRx = Str::of(request()->path())->replace(Admin::config("\141\144\155\151\x6e\56\x72\157\x75\x74\x65\56\160\162\x65\146\151\170"), '')->value(); goto GdXYF; Ax5xZ: if ($mAcmM) { goto RN3wt; } goto c6mJF; c6mJF: return $this->response()->success(); goto hsDm5; hsDm5: RN3wt: goto C1t3z; wLSeD: } }
