<?php

namespace DagaSmart\BizAdmin\Events;

use Illuminate\Foundation\Events\Dispatchable;

class ExtensionChanged{
    use Dispatchable;
    public function __construct(
        public string $name,
        public string $type
    )
    {

    }
}
