<?php

namespace ElaborateCode\ResourceRoute\Tests\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class TestRouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->routes(function () {
            Route::namespace($this->namespace)
                ->group(__DIR__.'/../routes/test_web.php');
        });
    }
}
