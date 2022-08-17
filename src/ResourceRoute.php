<?php

namespace ElaborateCode\ResourceRoute;

use Illuminate\Routing\Router;

class ResourceRoute extends Router
{
    /**
     * Route a resource to a controller index method.
     *
     * @param  string  $name
     * @param  string  $controller
     * @return \Illuminate\Routing\PendingResourceRegistration
     */
    public function index($name, $controller)
    {
        return $this->resource($name, $controller, ['only' => __FUNCTION__]);
    }

    /**
     * Route a resource to a controller store method.
     *
     * @param  string  $name
     * @param  string  $controller
     * @return \Illuminate\Routing\PendingResourceRegistration
     */
    public function store($name, $controller)
    {
        return $this->resource($name, $controller, ['only' => __FUNCTION__]);
    }

    /**
     * Route a resource to a controller create method.
     *
     * @param  string  $name
     * @param  string  $controller
     * @return \Illuminate\Routing\PendingResourceRegistration
     */
    public function create($name, $controller)
    {
        return $this->resource($name, $controller, ['only' => __FUNCTION__]);
    }

    /**
     * Route a resource to a controller show method.
     *
     * @param  string  $name
     * @param  string  $controller
     * @return \Illuminate\Routing\PendingResourceRegistration
     */
    public function show($name, $controller)
    {
        return $this->resource($name, $controller, ['only' => __FUNCTION__]);
    }

    /**
     * Route a resource to a controller update method.
     *
     * @param  string  $name
     * @param  string  $controller
     * @return \Illuminate\Routing\PendingResourceRegistration
     */
    public function update($name, $controller)
    {
        return $this->resource($name, $controller, ['only' => __FUNCTION__]);
    }

    /**
     * Route a resource to a controller destroy method.
     *
     * @param  string  $name
     * @param  string  $controller
     * @return \Illuminate\Routing\PendingResourceRegistration
     */
    public function destroy($name, $controller)
    {
        return $this->resource($name, $controller, ['only' => __FUNCTION__]);
    }

    /**
     * Route a resource to a controller edit method.
     *
     * @param  string  $name
     * @param  string  $controller
     * @return \Illuminate\Routing\PendingResourceRegistration
     */
    public function edit($name, $controller)
    {
        return $this->resource($name, $controller, ['only' => __FUNCTION__]);
    }
}
