<?php

namespace ElaborateCode\ResourceRoute\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ElaborateCode\ResourceRoute\ResourceRoute
 */
class ResourceRoute extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ElaborateCode\ResourceRoute\ResourceRoute::class;
    }
}
