<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:43              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Services; use Illuminate\Support\Arr; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Models\AdminRoleUser; use Illuminate\Database\Eloquent\Builder; class AdminRoleUserService extends AdminService { public function __construct() { parent::__construct(); $this->modelName = Admin::adminRoleUserModel(); } public function roleUserOption($WG2Os = false) { $NTNJT = $this->getModel()->query()->with(["\x63\150\x69\x6c\x64\162\145\156" => function ($gt6o4) { }])->select("\165\163\145\162\137\x69\144")->AddSelect($this->getModel()->raw("\162\157\154\145\x5f\x69\x64\x20\141\163\40\x72\x65\x66"))->get()->toArray(); return $NTNJT; } }
