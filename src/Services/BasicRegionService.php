<?php

namespace DagaSmart\BizAdmin\Services;

use DagaSmart\BizAdmin\Models\BasicRegion;
use DagaSmart\BizAdmin\Services\AdminService;

/**
 * 地区管理
 *
 * @method BasicRegion getModel()
 * @method BasicRegion|\Illuminate\Database\Query\Builder query()
 */
class BasicRegionService extends AdminService
{
	protected string $modelName = BasicRegion::class;
}
