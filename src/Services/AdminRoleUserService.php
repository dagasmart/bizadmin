<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:22              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($gD202 = false) { $tkLzv = $this->getModel()->query()->with(["\x63\150\151\154\144\162\x65\156" => function ($U1_uc) { }])->select("\x75\163\x65\162\137\x69\x64")->AddSelect($this->getModel()->raw("\162\x6f\154\x65\x5f\151\x64\x20\x61\163\40\x72\x65\146"))->get()->toArray(); return $tkLzv; } }
