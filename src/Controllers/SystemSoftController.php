<?php

namespace DagaSmart\BizAdmin\Controllers;

use DagaSmart\BizAdmin\Admin;
use Illuminate\Http\Request;
use DagaSmart\BizAdmin\Renderers\Form;
use DagaSmart\BizAdmin\Extend\Extension;
use DagaSmart\BizAdmin\Renderers\DialogAction;
use DagaSmart\BizAdmin\Events\ExtensionChanged;
use DagaSmart\BizAdmin\Controllers\AdminController;

class SystemSoftController extends AdminController
{
    /**
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function index()
    {
        if ($this->actionOfGetData()) {
            $data = [];
            foreach (Admin::extension()->all() as $extension) {
                $data[] = $this->each($extension);
            }

            return $this->response()->success(['rows' => $data]);
        }

        $page = $this->basePage()->body($this->list());

        return $this->response()->success($page);
    }

    protected function each($extension)
    {
        $property = $extension->composerProperty;

        $name    = $extension->getName();
        $version = $extension->getVersion();

        return [
            'id'          => $name,
            'alias'       => $extension->getAlias(),
            'logo'        => $extension->getLogoBase64(),
            'name'        => $name,
            'version'     => $version,
            'description' => $property->description,
            'authors'     => $property->authors,
            'homepage'    => $property->homepage,
            'enabled'     => $extension->enabled(),
            //'payed'       => $extension->payed(),
            'extension'   => $extension,
            'doc'         => $extension->getDocs(),
            'has_setting' => $extension->settingForm() instanceof Form,
            'used'        => $extension->used() && !Admin::currentModule(true),
        ];
    }

    public function list()
    {
        return amis()->CRUDTable()
            ->perPage(20)
            ->affixHeader(false)
            ->filterTogglable()
            ->filterDefaultVisible(false)
            ->api($this->getListGetDataPath())
            ->perPageAvailable([10, 20, 30, 50, 100, 200])
            ->footerToolbar(['switch-per-page', 'statistics', 'pagination'])
            ->loadDataOnce()
            ->source('${rows | filter:alias:match:keywords}')
            ->filter(
                $this->baseFilter()->body([
                    amis()->TextControl()
                        ->name('keywords')
                        ->label(admin_trans('admin.extensions.form.alias'))
                        ->placeholder(admin_trans('admin.extensions.filter_placeholder'))
                        ->size('md'),
                ])
            )
            ->headerToolbar([
                $this->moreExtend(), //更多扩展
                $this->localInstall(), //本地安装
                $this->createExtend(), //创建扩展
                amis('reload')->align('right'),
                amis('filter-toggler')->align('right'),
            ])
            ->autoFillHeight(true)
            ->columns([
                amis()->TableColumn('alias', admin_trans('admin.extensions.form.alias'))
                    ->type('tpl')
                    ->tpl('
                    <div class="flex">
                        <div> <img src="${logo}" class="w-10 mr-4"/> </div>
                        <div>
                            <div><a href="${homepage}" target="_blank">${alias | truncate:30}</a></div>
                            <div class="text-gray-400">${name}</div>
                        </div>
                    </div>
                '),
                amis()->TableColumn('description', admin_trans('admin.extensions.form.description'))->width(500),
                amis()->TableColumn('author', admin_trans('admin.extensions.card.author'))
                    ->type('tpl')
                    ->tpl('
                    <div>${authors[0].name}</div>
                    <span class="text-gray-400">${authors[0].email}</span>
                '),
                $this->rowActions([
                    amis()->DrawerAction()->label(admin_trans('admin.show'))->className('p-0')->level('link')->drawer(
                        amis()->Drawer()
                            ->size('lg')
                            ->title('README.md')
                            ->actions([])
                            ->closeOnOutside()
                            ->closeOnEsc()
                            ->body(amis()->Markdown()->name('${doc | raw}')->options([
                                'html'   => true,
                                'breaks' => true,
                            ]))
                    ),
                    amis()->DrawerAction()
                        ->label(admin_trans('admin.extensions.setting'))
                        ->level('link')
                        ->visibleOn('${has_setting && enabled}')
                        ->drawer(
                            amis()
                                ->Drawer()
                                ->title(admin_trans('admin.extensions.setting'))
                                ->resizable()
                                ->closeOnOutside()
                                ->body(
                                    amis()->Service()
                                        ->schemaApi([
                                            'url'    => admin_url('dev_tools/extensions/config_form'),
                                            'method' => 'post',
                                            'data'   => [
                                                'id' => '${id}',
                                            ],
                                        ])
                                )
                                ->actions([])
                        ),
                    amis()->AjaxAction()
                        ->label('${enabled ? "' . admin_trans('admin.extensions.disable') . '" : "' . admin_trans('admin.extensions.enable') . '"}')
                        ->level('link')
                        ->className(["text-success" => '${!enabled}', "text-danger" => '${enabled}'])
                        ->api([
                            'url'    => admin_url('dev_tools/extensions/enable'),
                            'method' => 'post',
                            'data'   => [
                                'id'      => '${id}',
                                'enabled' => '${!enabled}',
                            ],
                        ])
                        ->confirmText('${enabled ? "' . admin_trans('admin.extensions.disable_confirm') . '" : "' . admin_trans('admin.extensions.enable_confirm') . '"}'),
                    amis()->AjaxAction()
                        ->label(admin_trans('admin.extensions.uninstall'))
                        ->level('link')
                        ->className('text-danger')
                        ->api([
                            'url'    => admin_url('dev_tools/extensions/uninstall'),
                            'method' => 'post',
                            'data'   => ['id' => '${id}'],
                        ])
                        ->visibleOn('${used}')
                        ->confirmText(admin_trans('admin.extensions.uninstall_confirm')),
                ]),
            ]);
    }

    /**
     * 创建扩展
     *
     * @return DialogAction
     */
    public function createExtend()
    {
        return amis()->DialogAction()
            ->hiddenOn((bool) Admin::currentModule(true))
            ->label(admin_trans('admin.extensions.create_extension'))
            ->icon('fa fa-add')
            ->dialog(
                amis()->Dialog()->title(admin_trans('admin.extensions.create_extension'))->body(
                    amis()->Form()->mode('normal')->api($this->getStorePath())->body([
                        amis()->Alert()
                            ->level('info')
                            ->showIcon()
                            ->body(admin_trans('admin.extensions.create_tips', ['dir' => config('admin.extension.dir')])),
                        amis()->TextControl()
                            ->name('alias')
                            ->label(admin_trans('admin.extensions.form.alias'))
                            ->placeholder(admin_trans('admin.extensions.form.alias_placeholder'))
                            ->required(),
                        amis()->TextControl()
                            ->name('name')
                            ->label(admin_trans('admin.extensions.form.name'))
                            ->placeholder(admin_trans('admin.extensions.form.eg') . 'slowlyo/notice')
                            ->required(),
                        amis()->TextControl()
                            ->name('namespace')
                            ->label(admin_trans('admin.extensions.form.namespace'))
                            ->placeholder(admin_trans('admin.extensions.form.eg') . 'Slowlyo\Notice')
                            ->required(),
                        amis()->TextareaControl()
                            ->name('description')
                            ->label(admin_trans('admin.extensions.form.description'))
                            ->placeholder(admin_trans('admin.extensions.form.describe_placeholder'))
                            ->required(),
                    ])
                )
            );
    }

    public function store(Request $request)
    {
        $extension = Extension::make();

        $extension->createDir($request->name, $request->alias, $request->namespace, $request->description);

        if ($extension->hasError()) {
            return $this->response()->fail($extension->getError());
        }

        //创建扩展事件
        ExtensionChanged::dispatch($request->name, 'create');

        return $this->response()->successMessage(
            admin_trans('admin.successfully_message', ['attribute' => admin_trans('admin.extensions.create')])
        );
    }

    /**
     * 本地安装
     *
     * @return DialogAction
     */
    public function localInstall()
    {
        return amis()->DialogAction()
            ->hiddenOn((bool) Admin::currentModule(true))
            ->label(admin_trans('admin.extensions.local_install'))
            ->icon('fa-solid fa-cloud-arrow-up')
            ->dialog(
                amis()->Dialog()->title(admin_trans('admin.extensions.local_install'))->showErrorMsg(false)->body(
                    amis()->Form()->mode('normal')->api('post:' . admin_url('dev_tools/extensions/install'))->body([
                        amis()->FileControl()->name('file')->label()->required()->drag()->accept('.zip'),
                    ])
                )
            );


    }

    /**
     * 更多扩展
     */
    public function moreExtend()
    {
        return amis()->UrlAction()
            ->url('system/message')
            ->label(admin_trans('admin.extensions.more_extensions'))
            ->icon('fa fa-map-signs')
            ->level('success')
            ->blank();
    }

    /**
     * 安装
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
     */
    public function install(Request $request)
    {
        $file = $request->input('file');

        if (!$file) {
            return $this->response()->fail(admin_trans('admin.extensions.validation.file'));
        }

        try {
            $path = $this->getFilePath($file);

            $manager = Admin::extension();

            $extensionName = $manager->extract($path, true);

            if (!$extensionName) {
                return $this->response()->fail(admin_trans('admin.extensions.validation.invalid_package'));
            }

            //安装扩展事件
            ExtensionChanged::dispatch($extensionName, 'install');

            return $this->response()->successMessage(
                admin_trans('admin.successfully_message', ['attribute' => admin_trans('admin.extensions.install')])
            );
        } catch (\Throwable $e) {
            return $this->response()->fail($e->getMessage());
        } finally {
            if (!empty($path)) {
                @unlink($path);
            }
        }
    }

    /**
     * @throws \Exception
     */
    protected function getFilePath($file)
    {
        $disk = Admin::config('admin.upload.disk') ?: 'local';

        $root = Admin::config("filesystems.disks.{$disk}.root");

        if (!$root) {
            throw new \Exception(sprintf('Missing \'root\' for disk [%s].', $disk));
        }

        return rtrim($root, '/') . '/' . $file;
    }

    /**
     * 启用/禁用
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function enable(Request $request)
    {
        Admin::extension()->enable($request->id, $request->enabled);

        //扩展启用禁用事件
        ExtensionChanged::dispatch($request->id, $request->enabled ? 'enable' : 'disable');

        return $this->response()->successMessage(admin_trans('admin.action_success'));
    }

    /**
     * 卸载
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function uninstall(Request $request)
    {
        Admin::extension($request->id)->uninstall();

        //扩展卸载事件
        ExtensionChanged::dispatch($request->id, 'uninstall');

        return $this->response()->successMessage(admin_trans('admin.action_success'));
    }

    /**
     * 保存扩展设置
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function saveConfig(Request $request)
    {
        $data = collect($request->all())->except(['extension'])->toArray();

        Admin::extension($request->input('extension'))->saveConfig($data);

        return $this->response()->successMessage(admin_trans('admin.save_success'));
    }

    /**
     * 获取扩展设置
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function getConfig(Request $request)
    {
        $config = Admin::extension($request->input('extension'))->config();

        return $this->response()->success($config);
    }

    /**
     * 获取扩展设置表单
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\JsonResource
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function configForm(Request $request)
    {
        $form = Admin::extension($request->id)->settingForm();

        return $this->response()->success($form);
    }
}
