<?php

namespace UiBuilder\Layout;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UiBuilder\Layout\Skeleton\SkeletonClass
 */
class LayoutFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'layout';
    }
}
