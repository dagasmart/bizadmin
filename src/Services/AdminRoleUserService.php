<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($EkS1s = false) { $m9VKW = $this->getModel()->query()->with(["\x63\x68\151\x6c\144\x72\x65\156" => function ($HpvUM) { }])->select("\165\x73\145\x72\x5f\151\144")->AddSelect($this->getModel()->raw("\162\157\x6c\x65\137\151\144\40\x61\x73\x20\162\145\146"))->get()->toArray(); return $m9VKW; } }
