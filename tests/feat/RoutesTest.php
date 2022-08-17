<?php

use ElaborateCode\ResourceRoute\Facades\ResourceRoute;

it('checks routes', function () {
    ResourceRoute::index('entities', TestController::class);
    $routeCollection = Illuminate\Support\Facades\Route::getRoutes();

    dump($routeCollection);

    echo route('entities.create');

    $this->assertTrue(true);
});
