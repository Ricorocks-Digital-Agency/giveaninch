<?php

namespace RicorocksDigitalAgency\Giveaninch;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RicorocksDigitalAgency\Giveaninch\Skeleton\SkeletonClass
 */
class GiveaninchFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'giveaninch';
    }
}
