<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto Ae3oM; Ae3oM: $KFu_V = Str::of(request()->path())->replace(Admin::config("\x61\144\x6d\151\x6e\56\x72\157\x75\164\x65\56\x70\x72\x65\x66\151\x78"), '')->value(); goto F_46r; F_46r: $B5z1q = $this->service->getApiByPath($KFu_V); goto Dw3rt; OD4Ke: Ke1FF: goto ikzRZ; Dw3rt: if ($B5z1q) { goto Ke1FF; } goto lhfz0; ikzRZ: return app($B5z1q->template)->setApiRecord($B5z1q)->handle(); goto dZw87; lhfz0: return $this->response()->success(); goto OD4Ke; dZw87: } }
