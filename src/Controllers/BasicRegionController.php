<?php

namespace DagaSmart\BizAdmin\Controllers;

use DagaSmart\BizAdmin\Services\BasicRegionService;
use DagaSmart\BizAdmin\Controllers\AdminController;

/**
 * 地区管理
 *
 * @property BasicRegionService $service
 */
class BasicRegionController extends AdminController
{
	protected string $serviceName = BasicRegionService::class;

	public function list()
	{
		$crud = $this->baseCRUD()
			->filterTogglable(false)
			->headerToolbar([
				$this->createButton('drawer', 'sm'),
				...$this->baseHeaderToolBar()
			])
            ->autoFillHeight(true)
			->columns([
				amis()->TableColumn('id', 'ID')->sortable(),
				amis()->TableColumn('name', '区划名称'),
				amis()->TableColumn('parent_id', '父级ID'),
				amis()->TableColumn('code', '区划编码')->sortable(),
				amis()->TableColumn('level', '层级'),
				amis()->TableColumn('created_at', admin_trans('admin.created_at'))->type('datetime')->sortable(),
				amis()->TableColumn('updated_at', admin_trans('admin.updated_at'))->type('datetime')->sortable(),
				$this->rowActions('drawer', 'sm')
			]);

		return $this->baseList($crud);
	}

	public function form($isEdit = false)
	{
		return $this->baseForm()->mode('normal')->body([
			amis()->TextControl('name', '区划名称'),
			amis()->TextControl('parent_id', '父级ID'),
			amis()->TextControl('code', '区划编码'),
			amis()->TextControl('level', '层级'),
		]);
	}

	public function detail()
	{
		return $this->baseDetail()->body([
			amis()->TextControl('id', 'ID')->static(),
			amis()->TextControl('name', '区划名称')->static(),
			amis()->TextControl('parent_id', '父级ID')->static(),
			amis()->TextControl('code', '区划编码')->static(),
			amis()->TextControl('level', '层级')->static(),
			amis()->TextControl('created_at', admin_trans('admin.created_at'))->static(),
			amis()->TextControl('updated_at', admin_trans('admin.updated_at'))->static(),
		]);
	}
}
