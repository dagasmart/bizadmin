<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($IbYmE = false) { $EybI9 = $this->getModel()->query()->with(["\143\x68\x69\154\144\x72\145\156" => function ($q6KW6) { }])->select("\x75\x73\x65\x72\137\x69\x64")->AddSelect($this->getModel()->raw("\162\x6f\154\145\x5f\x69\x64\40\x61\163\40\162\x65\146"))->get()->toArray(); return $EybI9; } }
