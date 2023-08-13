# Laravel Resource Routes

⚠️Do not use this library! If you like the idea just copy the code from [/src/ResourceRoute.php](https://github.com/elaborate-code/laravel-resource-routes/blob/main/src/ResourceRoute.php). You do not need to rely on me maintaining a small syntactic sugar to keep your product up and running.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elaborate-code/laravel-resource-routes.svg?style=flat-square)](https://packagist.org/packages/elaborate-code/laravel-resource-routes)
[![run-tests](https://github.com/elaborate-code/laravel-resource-routes/actions/workflows/run-tests.yml/badge.svg)](https://github.com/elaborate-code/laravel-resource-routes/actions/workflows/run-tests.yml)
[![Fix PHP code style issues](https://github.com/elaborate-code/laravel-resource-routes/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/elaborate-code/laravel-resource-routes/actions/workflows/fix-php-code-style-issues.yml)
[![PHPStan](https://github.com/elaborate-code/laravel-resource-routes/actions/workflows/phpstan.yml/badge.svg)](https://github.com/elaborate-code/laravel-resource-routes/actions/workflows/phpstan.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/elaborate-code/laravel-resource-routes.svg?style=flat-square)](https://packagist.org/packages/elaborate-code/laravel-resource-routes)

![banner](https://banners.beyondco.de/Laravel%20Resource%20Routes.png?theme=dark&packageManager=composer+require&packageName=elaborate-code%2Flaravel-resource-routes&pattern=eyes&style=style_1&description=A+complementary+Route+Facade+with+methods+to+register+resource+routes&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

`Route::ressource` is a very convenient method that handles many conventions on the fly like **the controller methods names**, **the URI**, **the route name**, and **the HTTP verb**. But you may often find yourself
chainning `Route::ressource` with `only` or `except` for various reasons:

- Altering **the ressource controller** methods signatures.
- Using different `middlewares` on **resouce routes**.

In the case you find yourself using `Route::ressource` for only one or two methods, this package may come in handy, to offer what may seem as a cleaner syntax.

## Installation

```bash
composer require elaborate-code/laravel-resource-routes
```

## Usage example

```php
ResourceRoute::index('resources', ResourceController::class);
// Equivelent to:
// Route::ressource('resources', ResourceController::class)->only('index');

ResourceRoute::create('resources', ResourceController::class);
ResourceRoute::store('resources', ResourceController::class);
// Equivelent to:
// Route::ressource('resources', ResourceController::class)->only(['create', 'store']);

ResourceRoute::show('resources', ResourceController::class);

Route::middleware('can:update')->group(function () {
    ResourceRoute::edit('resources', ResourceController::class);
    ResourceRoute::update('resources', ResourceController::class);
});

ResourceRoute::destroy('resources', ResourceController::class);
```

## Testing

```bash
vendor/bin/pest
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
