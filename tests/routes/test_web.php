<?php

use ElaborateCode\ResourceRoute\Facades\ResourceRoute;
use ElaborateCode\ResourceRoute\Tests\Http\Controllers\TestController;

ResourceRoute::index('entities', TestController::class)->middleware('');
ResourceRoute::create('entities', TestController::class);
ResourceRoute::store('entities', TestController::class);
ResourceRoute::show('entities', TestController::class);
ResourceRoute::edit('entities', TestController::class);
ResourceRoute::update('entities', TestController::class);
ResourceRoute::destroy('entities', TestController::class);
