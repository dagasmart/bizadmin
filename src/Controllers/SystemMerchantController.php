<?php

namespace DagaSmart\BizAdmin\Controllers;

use DagaSmart\BizAdmin\Renderers\Page;
use DagaSmart\BizAdmin\Renderers\Form;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use DagaSmart\BizAdmin\Services\SystemMerchantService;

class SystemMerchantController extends AdminController
{
    protected string $serviceName = SystemMerchantService::class;

    public function list(): Page
    {
        $crud = $this->baseCRUD()
            ->headerToolbar([
                $this->createButton(true),
                amis('reload')->align('right'),
                amis('filter-toggler')->align('right'),
                //amis()->Button()->label('我是按钮')->level('primary')->permission('sys'),
            ])
            ->footable()
            ->filterTogglable()
            ->filter(
                $this->baseFilter()->body([
                    amis()->TextControl('username', '用户名')->clearable()->size('md'),
                    amis()->TextControl('realname', '商户姓名')->clearable()->size('md'),
                    amis()->CheckboxesControl('soft_auth', '授权方式')
                        ->options($this->service->authOption())
                        ->clearable()
                        ->size('md'),
                    amis()->SelectControl('soft_status', '软件状态')
                        ->options($this->service->statusOption())
                        ->clearable()
                        ->size('md'),
                ])
            )
            ->autoFillHeight(true)
            ->columns([
                amis()->TableColumn('id', 'ID')->sortable(),
                amis()->TableColumn('username', '用户名')->set('fixed','left'),
                amis()->TableColumn('realname', '商户姓名')->set('fixed','left'),
                amis()->TableColumn('mobile', '手机')->set('static',true),
                amis()->TableColumn('is_mobile', '手机验证')->set('static',true),
                amis()->TableColumn('soft_auth', '授权方式')
                    ->set('type','radios')
                    ->set('options',$this->service->authOption())
                    ->set('static',true),
                amis()->TableColumn('soft_price', '价格'),
                amis()->TableColumn('soft_status', '软件状态')
                    ->set('type','radios')
                    ->set('options',$this->service->statusOption())
                    ->set('static',true),
                amis()->TableColumn('created_at', __('admin.created_at'))->set('type', 'datetime')->sortable(),
                amis()->TableColumn('updated_at', __('admin.updated_at'))->set('type', 'datetime')->sortable(),
                $this->rowActions(true)->set('fixed','right')
            ]);

        return $this->baseList($crud);
    }

    public function form($isEdit = false): Form
    {
        return $this->baseForm()->body([
            amis()->TextControl('soft_name', '软件名称')->required(),
            amis()->ImageControl('soft_icon_url', '软件图标')->required(),
            amis()->TextControl('soft_icon')->hidden()->value('${soft_icon_url}'),
            amis()->ImageControl('soft_images_url','软件图例')
                ->width('10')
                ->maxLength(6)
                ->multiple()
                ->draggable()
                ->desc('最多允许上传6张')
                ->required(),
            amis()->TextControl('soft_images')->hidden()->value('${soft_images_url}'),
            amis()->RadiosControl('soft_auth', '授权方式')->columnCount(1)
                ->options($this->service->authOption())
                ->required(),
            amis()->NumberControl('soft_price','价格/积分')
                ->value(0)
                ->min(0)
                ->hiddenOn('${soft_auth==1}')
                ->required(),
            amis()->RadiosControl('soft_status', '软件状态')
                ->options($this->service->statusOption())
                ->required(),
        ]);
    }

    public function detail(): Form
    {
        return $this->baseDetail()->body([
            amis()->TextControl('id', 'ID')->static(),
            amis()->TextControl('created_at', __('admin.created_at'))->static(),
            amis()->TextControl('updated_at', __('admin.updated_at'))->static()
        ]);
    }


}
