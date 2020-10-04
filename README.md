# Convert English date to Nepali date.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/krishnahimself/laravel-ad-to-bs-converter.svg?style=flat-square)](https://packagist.org/packages/krishnahimself/laravel-ad-to-bs-converter)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/krishnahimself/laravel-ad-to-bs-converter/run-tests?label=tests)](https://github.com/krishnahimself/laravel-ad-to-bs-converter/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/krishnahimself/laravel-ad-to-bs-converter.svg?style=flat-square)](https://packagist.org/packages/krishnahimself/laravel-ad-to-bs-converter)


This package can convert english date to nepali date.

Here area few short examples of what you can do:

Convert english date to nepali date. English date format to pass is (YYYY, M, D)

```bash
DateConverter::fromEnglishDate(2020, 10, 4)->toNepaliDate();
```

## Installation

You can install the package via composer:

```bash
composer require krishnahimself/laravel-ad-to-bs-converter
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Krishnahimself\DateConverter\DateConverterServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Krishnahimself\DateConverter\DateConverterServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$laravel-ad-to-bs-converter = new Krishnahimself\DateConverter();
echo $laravel-ad-to-bs-converter->echoPhrase('Hello, Krishnahimself!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Krishna Bhandari](https://github.com/krishnahimself)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
