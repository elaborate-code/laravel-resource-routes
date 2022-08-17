<?php

namespace ElaborateCode\ResourceRoute\Tests;

use ElaborateCode\ResourceRoute\ResourceRouteServiceProvider;
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
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
