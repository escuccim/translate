# translate

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A package to enable localization for Laravel on either a subdomain basis or from the session.

## Install

Via Composer

``` bash
$ composer require escuccim/translate
```

## Usage
Register the middleware in /app/Http/Kernel.php in the 'web' array of the $middlewareGroups array:
```php
'web' => [
    ...
     \Escuccim\Translate\Http\Middleware\SetLanguage::class,
],
```
Make sure that the middleware is after the StartSession middleware if you wish to use session based translation.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email skooch@gmail.com instead of using the issue tracker.

## Credits

- [Eric Scuccimarra][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/escuccim/translate.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/escuccim/translate/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/escuccim/translate.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/escuccim/translate.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/escuccim/translate.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/escuccim/translate
[link-travis]: https://travis-ci.org/escuccim/translate
[link-scrutinizer]: https://scrutinizer-ci.com/g/escuccim/translate/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/escuccim/translate
[link-downloads]: https://packagist.org/packages/escuccim/translate
[link-author]: https://github.com/escuccim
[link-contributors]: ../../contributors
