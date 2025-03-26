<?php

namespace DagaSmart\BizAdmin\Controllers;

use GuzzleHttp\Psr7\Request;
use DagaSmart\BizAdmin\Renderers\Page;
use DagaSmart\BizAdmin\Renderers\Form;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use DagaSmart\BizAdmin\Services\SystemMessageService;

/**
 * 系统消息表
 *
 * @property SystemMessageService $service
 */
class SystemMessageController extends AdminController
{
    protected string $serviceName = SystemMessageService::class;

    public function list()
    {
        $crud = $this->baseCRUD()
            ->filterTogglable(false)
            ->headerToolbar([
                $this->createButton('dialog'),
                ...$this->baseHeaderToolBar()
            ])
            ->autoFillHeight(true)
            ->columns([
                amis()->TableColumn('id', 'ID')->sortable(),
                amis()->TableColumn('from_name', '发件人'),
                amis()->TableColumn('title', '标题'),
                //amis()->TableColumn('body', '内容'),
                amis()->TableColumn('type', '类型')
                    ->set('type','select')
                    ->set('options', $this->service->typeOptions())
                    ->set('static', true),
                amis()->TableColumn('to_names', '收件方'),
                amis()->TableColumn('state', '状态')
                    ->set('type','select')
                    ->set('options', [
                        ['label'=>'未读','value'=>0],
                        ['label'=>'已读','value'=>1],
                        ['label'=>'已回复','value'=>2]
                    ])
                    ->set('static', true),
                amis()->TableColumn('module', '模块'),
                amis()->TableColumn('mer_id', '商户id'),
                $this->rowActions('dialog')
            ]);



        return amis()->Tabs()->tabsMode('strong')->tabs([
                ['title' => '发出的消息','body' => $this->baseList($crud)],
                ['title' => '系统消息','body' => '选项卡内容2',],

        ]);
        //return $this->baseList($crud);
    }

    public function form($isEdit = false)
    {
        return $this->baseForm()->body([
            amis()->RadiosControl('type','类型')
                ->options($this->service->typeOptions())
                ->selectFirst()
                ->required(),
            amis()->SelectControl('to_ids', '收件方')
                //->visibleOn('${type == "private"}')
                ->searchable()
                ->selectMode('tree')
                ->searchResultMode('tree')
                ->Source('get:'.admin_url('/system/message/${type}'))
                ->multiple()
                ->clearable()
                ->autoFill([
                    'to_names'=> '${items|pick:label}'
                ])
                ->maxTagCount(6)
                ->columns([
                    ['name'=> 'label', 'label' => '收件方'],
                    //['name'=> 'value', 'label' => 'id']
                ])
                ->required(),
            amis()->TextControl('to_names', '收件方')->hidden(),
            amis()->TextControl('title', '标题')->placeholder('请输入消息标题'),
            amis()->WangEditor('body', '内容')->height(200),
            amis()->RadiosControl('state', '状态')
                ->options([
                    ['label'=>'未读','value'=>0],
                    ['label'=>'已读','value'=>1],
                    ['label'=>'已回复','value'=>2]
                ])
                ->value(0)
                //->visible($isEdit)
                ->disabled(),
            amis()->TextControl('from_uid', '发件人id')->hidden()->value(admin_user()->id),
            amis()->TextControl('from_name', '发件人')->readOnly()->value(admin_user()->name),
            //amis()->TextControl('module', '模块'),
            //amis()->TextControl('mer_id', '商户id'),
        ]);
    }

    public function detail()
    {
        return $this->baseDetail()->body([
            amis()->TextControl('id', 'ID')->static(),
            amis()->TextControl('from_uid', '发件人id')->static(),
            amis()->TextControl('from_name', '发件人')->static(),
            amis()->SelectControl('type', '类型')->options($this->service->typeOptions())->static(),
            amis()->TextControl('to_uid', '收件方id')->static(),
            amis()->TextControl('to_name', '收件方')->static(),
            amis()->TextControl('title', '标题')->static(),
            amis()->TextControl('body', '内容')->static(),
            amis()->TextControl('state', '状态：默认0，1已读，2已回复')->static(),
            amis()->TextControl('module', '模块')->static(),
            amis()->TextControl('mer_id', '商户id')->static(),
            amis()->TextControl('created_at', admin_trans('admin.created_at'))->static(),
            amis()->TextControl('updated_at', admin_trans('admin.updated_at'))->static(),
        ]);
    }

    /**
     * 消息类型映射到收件方
     * @param $type
     * @return array
     */
    public function mapping($type = null)
    {
        $model = new SystemMessageService;
        return $this->service->mapping($type);
    }

}
