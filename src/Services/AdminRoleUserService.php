<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:00              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($CBzve = false) { $dT1eL = $this->getModel()->query()->with(["\143\150\x69\154\x64\x72\145\x6e" => function ($C35Ce) { }])->select("\x75\163\145\162\x5f\151\144")->AddSelect($this->getModel()->raw("\162\x6f\x6c\x65\x5f\151\x64\40\x61\x73\40\162\x65\146"))->get()->toArray(); return $dT1eL; } }
