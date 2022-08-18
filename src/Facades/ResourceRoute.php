<?php

namespace ElaborateCode\ResourceRoute\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Routing\PendingResourceRegistration index(string $name, string $controller)
 * @method static \Illuminate\Routing\PendingResourceRegistration store(string $name, string $controller)
 * @method static \Illuminate\Routing\PendingResourceRegistration create(string $name, string $controller)
 * @method static \Illuminate\Routing\PendingResourceRegistration show(string $name, string $controller)
 * @method static \Illuminate\Routing\PendingResourceRegistration update(string $name, string $controller)
 * @method static \Illuminate\Routing\PendingResourceRegistration destroy(string $name, string $controller)
 * @method static \Illuminate\Routing\PendingResourceRegistration edit(string $name, string $controller)
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
