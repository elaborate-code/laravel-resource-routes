<?php

it('checks routes', function () {

    // dump(Illuminate\Support\Facades\Route::getRoutes());

    echo route('entities.index').PHP_EOL;
    echo route('entities.create').PHP_EOL;

    $this->assertTrue(true);
});
