<?php

namespace Jagat\LaravelLogEnhancer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jagat\LaravelLogEnhancer\Skeleton\SkeletonClass
 */
class LaravelLogEnhancerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-log-enhancer';
    }
}
