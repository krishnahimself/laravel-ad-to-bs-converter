![Laravel AD to BS Converter](https://banners.beyondco.de/Laravel%20AD%20to%20BS%20Converter.png?theme=light&packageName=krishnahimself%2Flaravel-ad-to-bs-converter&pattern=architect&style=style_1&description=+Convert+English+date+to+Nepali+date.+&md=1&showWatermark=0&fontSize=100px&images=calculator)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/krishnahimself/laravel-ad-to-bs-converter.svg?style=flat-square)](https://packagist.org/packages/krishnahimself/laravel-ad-to-bs-converter)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/krishnahimself/laravel-ad-to-bs-converter/run-tests?label=tests)](https://github.com/krishnahimself/laravel-ad-to-bs-converter/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/krishnahimself/laravel-ad-to-bs-converter.svg?style=flat-square)](https://packagist.org/packages/krishnahimself/laravel-ad-to-bs-converter)


This package can convert english date to nepali date.

Here is one example of what you can do:

Convert english date to nepali date. English date format to pass is (YYYY, M, D)

```php
DateConverter::fromEnglishDate(2020, 10, 4)->toFormattedNepaliDate();
//Output: १८ असोज २०७७, आइतवार
```

## Installation

You can install the package via composer:

```bash
composer require krishnahimself/laravel-ad-to-bs-converter
```

## Usage

``` php
use Krishnahimself\DateConverter\DateConverter;

$nepaliDate = DateConverter::fromEnglishDate(2020, 10, 4)->toNepaliDate();
//Output: 2077-6-18

$nepaliDate = DateConverter::fromEnglishDate(2020, 10, 4)->toFormattedNepaliDate();
//Output: १८ असोज २०७७, आइतवार

$nepaliDate = DateConverter::fromEnglishDate(2020, 10, 4)->toNepaliDateArray();
//Output:
[
    'year' => 2077,
    'month' => 6,
    'day' => 18,
    'day_of_week' => 1,
]

$nepaliDate = DateConverter::fromEnglishDate(2020, 10, 4)->toFormattedNepaliDateArray();
//Output:
[
    'year' => '२०७७',
    'month' => 'असोज',
    'day' => '१८',
    'day_of_week' => 'आइतवार',
]
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
