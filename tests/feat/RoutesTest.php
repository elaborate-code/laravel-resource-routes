<?php

use Illuminate\Support\Arr;

// it('dumps', function () {
//     dd($this->routes);
// });

it('index route', function () {
    $name = 'index';

    $this->assertEquals(route("entities.$name"), 'http://localhost/entities');

    $route = Arr::first($this->routes, fn ($r) => $r['name'] === "entities.$name");

    $this->assertEquals($route['method'], 'GET|HEAD');
    $this->assertEquals($route['action'], "{$this->controller}@$name");
});

it('create route', function () {
    $name = 'create';

    $this->assertEquals(route("entities.$name"), 'http://localhost/entities/create');

    $route = Arr::first($this->routes, fn ($r) => $r['name'] === "entities.$name");

    $this->assertEquals($route['method'], 'GET|HEAD');
    $this->assertEquals($route['action'], "{$this->controller}@$name");
});

it('store route', function () {
    $name = 'store';

    $this->assertEquals(route("entities.$name"), 'http://localhost/entities');

    $route = Arr::first($this->routes, fn ($r) => $r['name'] === "entities.$name");

    $this->assertEquals($route['method'], 'POST');
    $this->assertEquals($route['action'], "{$this->controller}@$name");
});

it('show route', function () {
    $name = 'show';

    $this->assertEquals(route("entities.$name", ['entity' => 1]), 'http://localhost/entities/1');

    $route = Arr::first($this->routes, fn ($r) => $r['name'] === "entities.$name");

    $this->assertEquals($route['method'], 'GET|HEAD');
    $this->assertEquals($route['action'], "{$this->controller}@$name");
});

it('edit route', function () {
    $name = 'edit';

    $this->assertEquals(route("entities.$name", ['entity' => 1]), 'http://localhost/entities/1/edit');

    $route = Arr::first($this->routes, fn ($r) => $r['name'] === "entities.$name");

    $this->assertEquals($route['method'], 'GET|HEAD');
    $this->assertEquals($route['action'], "{$this->controller}@$name");
});

it('update route', function () {
    $name = 'update';

    $this->assertEquals(route("entities.$name", ['entity' => 1]), 'http://localhost/entities/1');

    $route = Arr::first($this->routes, fn ($r) => $r['name'] === "entities.$name");

    $this->assertEquals($route['method'], 'PUT|PATCH');
    $this->assertEquals($route['action'], "{$this->controller}@$name");
});

it('destroy route', function () {
    $name = 'destroy';

    $this->assertEquals(route("entities.$name", ['entity' => 1]), 'http://localhost/entities/1');

    $route = Arr::first($this->routes, fn ($r) => $r['name'] === "entities.$name");

    $this->assertEquals($route['method'], 'DELETE');
    $this->assertEquals($route['action'], "{$this->controller}@$name");
});
