<?php

namespace DagaSmart\BizAdmin\Services;

use DagaSmart\BizAdmin\Models\BasicDict;
use DagaSmart\BizAdmin\Services\AdminService;

/**
 * 地区管理
 *
 * @method BasicDict getModel()
 * @method BasicDict|\Illuminate\Database\Query\Builder query()
 */
class BasicDictService extends AdminService
{
	protected string $modelName = BasicDict::class;
}
