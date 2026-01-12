<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($ZcJgR = false) { $fBm0Y = $this->getModel()->query()->with(["\143\150\151\154\x64\x72\x65\156" => function ($pNlYO) { }])->select("\x75\x73\x65\162\137\151\144")->AddSelect($this->getModel()->raw("\162\x6f\x6c\x65\137\x69\x64\x20\x61\x73\x20\x72\x65\146"))->get()->toArray(); return $fBm0Y; } }
