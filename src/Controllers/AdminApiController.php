<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto zpJ3O; Hi2cF: $zwBgV = $this->service->getApiByPath($RlmSt); goto XzDuJ; zpJ3O: $RlmSt = Str::of(request()->path())->replace(Admin::config("\141\x64\155\x69\x6e\56\x72\x6f\x75\164\145\x2e\x70\162\x65\x66\x69\170"), '')->value(); goto Hi2cF; GQqLB: wA2nv: goto FD7sT; XzDuJ: if ($zwBgV) { goto wA2nv; } goto ISO12; FD7sT: return app($zwBgV->template)->setApiRecord($zwBgV)->handle(); goto UL2Pn; ISO12: return $this->response()->success(); goto GQqLB; UL2Pn: } }
