<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:52              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($CT_Sm = false) { $DWqRj = $this->getModel()->query()->with(["\x63\x68\151\154\x64\162\x65\x6e" => function ($UjlOj) { }])->select("\x75\163\145\x72\137\x69\144")->AddSelect($this->getModel()->raw("\162\x6f\154\145\137\151\144\40\x61\163\40\x72\145\x66"))->get()->toArray(); return $DWqRj; } }
