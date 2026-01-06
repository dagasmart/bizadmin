<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:40              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto eiW37; HMrUB: return app($e718Y->template)->setApiRecord($e718Y)->handle(); goto rIVHP; T3JOo: return $this->response()->success(); goto XJj22; RRGzy: $e718Y = $this->service->getApiByPath($ALS2w); goto aUE1l; XJj22: kWez8: goto HMrUB; eiW37: $ALS2w = Str::of(request()->path())->replace(Admin::config("\141\x64\155\151\156\x2e\x72\x6f\165\x74\145\x2e\x70\x72\x65\x66\151\170"), '')->value(); goto RRGzy; aUE1l: if ($e718Y) { goto kWez8; } goto T3JOo; rIVHP: } }
