<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($lWGam = false) { $beDOP = $this->getModel()->query()->with(["\143\x68\151\154\x64\162\145\x6e" => function ($jAg8I) { }])->select("\x75\x73\x65\162\x5f\x69\x64")->AddSelect($this->getModel()->raw("\162\157\154\145\x5f\151\144\x20\141\x73\x20\162\145\146"))->get()->toArray(); return $beDOP; } }
