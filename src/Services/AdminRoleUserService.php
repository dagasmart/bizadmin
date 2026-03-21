<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($QQJ9X = false) { $nCTtW = $this->getModel()->query()->with(["\143\150\x69\154\x64\x72\145\156" => function ($cSoU0) { }])->select("\x75\163\x65\162\x5f\151\144")->AddSelect($this->getModel()->raw("\x72\x6f\154\145\137\151\x64\x20\141\x73\x20\162\145\x66"))->get()->toArray(); return $nCTtW; } }
