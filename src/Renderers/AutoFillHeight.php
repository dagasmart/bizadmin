<?php

namespace DagaSmart\BizAdmin\Renderers;

/**
 * AutoFillHeight
 *
 * @author dagasmart
 * @version 6.10.0
 */
class AutoFillHeight extends BaseRenderer
{
    public function __construct()
    {


    }

    /**
     *
     */
    public function height($value = '')
    {
        return $this->set('height', $value);
    }

    /**
     *
     */
    public function maxHeight($value = '')
    {
        return $this->set('maxHeight', $value);
    }


}
