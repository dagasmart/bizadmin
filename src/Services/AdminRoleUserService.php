<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($wmeX0 = false) { $WWzVE = $this->getModel()->query()->with(["\x63\x68\x69\x6c\x64\162\145\156" => function ($Kukio) { }])->select("\x75\x73\x65\162\x5f\x69\x64")->AddSelect($this->getModel()->raw("\162\157\154\145\x5f\x69\x64\x20\x61\x73\x20\x72\x65\146"))->get()->toArray(); return $WWzVE; } }
