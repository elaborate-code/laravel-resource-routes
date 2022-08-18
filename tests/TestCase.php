<?php

namespace ElaborateCode\ResourceRoute\Tests;

use ElaborateCode\ResourceRoute\ResourceRouteServiceProvider;
use ElaborateCode\ResourceRoute\Tests\Http\Controllers\TestController;
use ElaborateCode\ResourceRoute\Tests\Providers\TestRouteServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        $router = app()->make('router');

        $this->routes = collect($router->getRoutes())->map(function ($route) {
            return [
                'method' => implode('|', $route->methods()),
                'uri' => $route->uri(),
                'name' => $route->getName(),
                'action' => ltrim($route->getActionName(), '\\'),
            ];
        })->filter()->all();

        $this->controller = TestController::class;
    }

    protected function getPackageProviders($app)
    {
        return [
            ResourceRouteServiceProvider::class,
            TestRouteServiceProvider::class,
        ];
    }
}
