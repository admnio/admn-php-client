<?php

namespace Admn\AdmnPhp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Admn\AdmnPhp\AdmnPhp
 */
class AdmnPhp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Admn\AdmnPhp\AdmnPhp::class;
    }
}
