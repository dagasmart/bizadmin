<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($NZBHC = false) { $KVjpj = $this->getModel()->query()->with(["\143\150\x69\154\144\x72\145\x6e" => function ($F5wSH) { }])->select("\x75\163\x65\x72\137\151\x64")->AddSelect($this->getModel()->raw("\162\x6f\x6c\x65\x5f\x69\x64\x20\x61\x73\40\162\145\146"))->get()->toArray(); return $KVjpj; } }
