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
Register the service provider in /config/app.php 'providers' array:
```php
Escuccim\Translate\TranslateServiceProvider::class,
```
Register the middleware in /app/Http/Kernel.php in the 'web' array of the $middlewareGroups array:
```php
'web' => [
    ...
     \Escuccim\Translate\Http\Middleware\SetLanguage::class,
],
```
Make sure that the middleware is after the StartSession middleware if you wish to use session based translation.

Publish the config file with
```bash
php artisan vendor:publish
```
This will place the config file in /config/translate.php.

## Usage
The config files has the following keys:
- use_subdomain - boolean - whether you wish to use subdomain based translation
- languages - array of languages as follows - 'language' => 'display', where language is the language and display is how you want to display the language in the drop-down menu, if you use it.
- subdomains - array of languages: 'subdomain' => 'language'. This is used by the middleware to map the subdomain to the language setting
- date_formats - array of date formats for strftime: 'language' => 'locale', where locale is the format of the dates you wish to use. Note that you must have the date formats installed on your web server for this to work properly. The default locale is en_US_POSIX.

I also include a route:
    /setlang/{lang} 
Which sets a session variable to {lang} which will override the subdomain if it is set. 

Lastly I include a function to output a Bootstrap drop-down menu which will use the data in the languages key of the config to generate links to set the language in session. This can be accessed with \Escuccim\Translate\TranslateClass::dropDown().

The middleware will first check if subdomain based translation is on, if so it will set the application locale to whatever is specified for the subdomain in the config file. Then if a session variable called 'locale' exists it will override the locale to correspond to the session. This allows you to default to a locale based on subdomain, but then have the user override this if they wish.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email skooch@gmail.com instead of using the issue tracker.

## Credits

- [Eric Scuccimarra][link-author]

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
