<?php

namespace ElaborateCode\ResourceRoute\Tests;

use ElaborateCode\ResourceRoute\ResourceRouteServiceProvider;
use ElaborateCode\ResourceRoute\Tests\Providers\TestRouteServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            ResourceRouteServiceProvider::class,
            TestRouteServiceProvider::class,
        ];
    }
}
