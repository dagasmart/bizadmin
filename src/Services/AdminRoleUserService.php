<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($AVdRu = false) { $UUf3f = $this->getModel()->query()->with(["\143\x68\x69\x6c\144\162\145\x6e" => function ($w140e) { }])->select("\x75\163\x65\x72\137\x69\144")->AddSelect($this->getModel()->raw("\162\157\154\x65\137\x69\144\x20\141\x73\40\162\145\146"))->get()->toArray(); return $UUf3f; } }
