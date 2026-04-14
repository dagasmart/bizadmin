<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto WiUCn; cfHiN: return $this->response()->success(); goto WVPnZ; vT_xd: return app($s4PKi->template)->setApiRecord($s4PKi)->handle(); goto b95el; WiUCn: $wSKpS = Str::of(request()->path())->replace(Admin::config("\x61\x64\x6d\151\x6e\56\x72\157\x75\x74\145\x2e\160\x72\x65\146\151\x78"), '')->value(); goto eUFDq; T5fsx: if ($s4PKi) { goto geIJS; } goto cfHiN; eUFDq: $s4PKi = $this->service->getApiByPath($wSKpS); goto T5fsx; WVPnZ: geIJS: goto vT_xd; b95el: } }
