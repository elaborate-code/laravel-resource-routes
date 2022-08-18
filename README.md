# Laravel Resource Routes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elaborate-code/laravel-resource-routes.svg?style=flat-square)](https://packagist.org/packages/elaborate-code/laravel-resource-routes)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-resource-routes/run-tests?label=tests)](https://github.com/elaborate-code/laravel-resource-routes/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-resource-routes/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/elaborate-code/laravel-resource-routes/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/elaborate-code/laravel-resource-routes.svg?style=flat-square)](https://packagist.org/packages/elaborate-code/laravel-resource-routes)

![banner](https://banners.beyondco.de/Laravel%20Resource%20Routes.png?theme=dark&packageManager=composer+require&packageName=elaborate-code%2Flaravel-resource-routes&pattern=eyes&style=style_1&description=A+complementary+Route+Facade+with+methods+to+register+resource+routes&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

`Route::ressource` is a very convenient method that handles many conventions on the fly like **the controller methods names**, **the URI** and the **HTTP verb**. But you may often find yourself altering methods signatures on the **ressource controller** that pushes you to extract the method route and chain `Route::ressource` with `only` or `except`. In the case you find yourself using `Route::ressource` for only one or two methods, this package may come in handy, to offer what may seem as a cleaner syntax (opinionaed).

## Installation

```bash
composer require elaborate-code/laravel-resource-routes
```

## Usage

```php
ResourceRoute::index('resources', ResourceController::class);
// Equivelent to:
Route::ressource('resources', ResourceController::class)->only('index');

ResourceRoute::create('resources', ResourceController::class);
ResourceRoute::store('resources', ResourceController::class);
// Equivelent to:
Route::ressource('resources', ResourceController::class)->only(['create', 'store']);

ResourceRoute::show('resources', ResourceController::class);
// Equivelent to:
Route::ressource('resources', ResourceController::class)->only('show');

ResourceRoute::edit('resources', ResourceController::class);
ResourceRoute::update('resources', ResourceController::class);
// Equivelent to:
Route::ressource('resources', ResourceController::class)->only(['edit', 'update']);

ResourceRoute::destroy('resources', ResourceController::class);
// Equivelent to:
Route::ressource('resources', ResourceController::class)->only('destroy');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/elaborate-code/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [medilies](https://github.com/elaborate-code)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
