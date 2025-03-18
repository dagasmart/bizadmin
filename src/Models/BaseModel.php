<?php

namespace DagaSmart\BizAdmin\Models;

use DagaSmart\BizAdmin\Admin;
use Illuminate\Database\Eloquent\Model;
use DagaSmart\BizAdmin\Traits\DatetimeFormatterTrait;

class BaseModel extends Model
{
    use DatetimeFormatterTrait;

    public function __construct(array $attributes = [])
    {
        if(!isset($this->connection)){
            $this->setConnection(Admin::config('admin.database.connection'));
        }

        parent::__construct($attributes);
    }
}
