# GiveAnInch

A Laravel package that provides geographic distance calculations between points.

## Installation

You can install the package via composer:

```bash
composer require ricorocks-digital-agency/giveaninch
```

## Usage

Using the package is simple via the `GiveAnInch` facade.

### Get the distance in KM between two points
```php
GiveAnInch::from(0, 0)->to(0, 0)->getDistance();
```

### Check if two coordinates are within a given radius of each other
```php
GiveAnInch::from(0, 0)->to(0, 0)->isWithin(10);
````

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email lukeraymonddowning@gmail.com instead of using the issue tracker.

## Credits

- [Luke Downing](https://github.com/ricorocks-digital-agency)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
