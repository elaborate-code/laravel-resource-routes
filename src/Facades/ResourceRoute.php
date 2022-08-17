<?php

namespace ElaborateCode\ResourceRoute\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Routing\Route index($name, $controller)
 * @method static \Illuminate\Routing\Route store($name, $controller)
 * @method static \Illuminate\Routing\Route create($name, $controller)
 * @method static \Illuminate\Routing\Route show($name, $controller)
 * @method static \Illuminate\Routing\Route update($name, $controller)
 * @method static \Illuminate\Routing\Route destroy($name, $controller)
 * @method static \Illuminate\Routing\Route edit($name, $controller)
 *
 * @see \ElaborateCode\ResourceRoute\ResourceRoute
 */
class ResourceRoute extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ElaborateCode\ResourceRoute\ResourceRoute::class;
    }
}
