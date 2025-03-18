<?php

namespace DagaSmart\BizAdmin\Renderers;

/**
 * IconItem
 *
 * @author dagasmart
 * @version 6.10.0
 */
class IconItem extends BaseRenderer
{
    public function __construct()
    {


    }

    /**
     * iconfont 里面的类名。
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     *
     */
    public function position($value = '')
    {
        return $this->set('position', $value);
    }


}
