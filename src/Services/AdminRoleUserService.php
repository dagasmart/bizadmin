<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($HTfVH = false) { $TGoHt = $this->getModel()->query()->with(["\143\x68\x69\x6c\144\162\x65\x6e" => function ($Ye93s) { }])->select("\x75\163\x65\x72\137\151\144")->AddSelect($this->getModel()->raw("\x72\x6f\154\x65\x5f\151\144\x20\141\x73\x20\162\145\146"))->get()->toArray(); return $TGoHt; } }
