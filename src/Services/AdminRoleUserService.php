<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($sK54N = false) { $y_p1j = $this->getModel()->query()->with(["\143\150\x69\154\x64\x72\x65\156" => function ($LCYGD) { }])->select("\165\x73\145\162\137\151\144")->AddSelect($this->getModel()->raw("\x72\157\154\145\x5f\x69\x64\40\x61\x73\40\162\x65\146"))->get()->toArray(); return $y_p1j; } }
