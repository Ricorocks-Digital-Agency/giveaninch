<?php

namespace RicorocksDigitalAgency\Giveaninch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class GiveAnInch
 * @package RicorocksDigitalAgency\Giveaninch\Facades
 *
 * @see \RicorocksDigitalAgency\Giveaninch\GiveAnInch
 *
 * @method static \RicorocksDigitalAgency\Giveaninch\GiveAnInch from($lat, $lng)
 */
class GiveAnInch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'giveaninch';
    }
}
