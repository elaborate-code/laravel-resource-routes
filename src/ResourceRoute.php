<?php

namespace ElaborateCode\ResourceRoute;

use Illuminate\Routing\PendingResourceRegistration;
use Illuminate\Support\Facades\Route;

class ResourceRoute
{
    /**
     * Route a resource to a controller index method.
     */
    public function index(string $name, string $controller): PendingResourceRegistration
    {
        return Route::resource($name, $controller)->only([__FUNCTION__]);
    }

    /**
     * Route a resource to a controller store method.
     */
    public function store(string $name, string $controller): PendingResourceRegistration
    {
        return Route::resource($name, $controller)->only([__FUNCTION__]);
    }

    /**
     * Route a resource to a controller create method.
     */
    public function create(string $name, string $controller): PendingResourceRegistration
    {
        return Route::resource($name, $controller)->only([__FUNCTION__]);
    }

    /**
     * Route a resource to a controller show method.
     */
    public function show(string $name, string $controller): PendingResourceRegistration
    {
        return Route::resource($name, $controller)->only([__FUNCTION__]);
    }

    /**
     * Route a resource to a controller update method.
     */
    public function update(string $name, string $controller): PendingResourceRegistration
    {
        return Route::resource($name, $controller)->only([__FUNCTION__]);
    }

    /**
     * Route a resource to a controller destroy method.
     */
    public function destroy(string $name, string $controller): PendingResourceRegistration
    {
        return Route::resource($name, $controller)->only([__FUNCTION__]);
    }

    /**
     * Route a resource to a controller edit method.
     */
    public function edit(string $name, string $controller): PendingResourceRegistration
    {
        return Route::resource($name, $controller)->only([__FUNCTION__]);
    }
}
