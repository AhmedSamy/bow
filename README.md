# bow

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Very early version of a frontend for [Laravel Voyager Admin][link-voyager].

I have been using a custom CMS based on this [video][link-tutplus-video] for my personal projects, and decided to adapt it to Voyager.

## What works

For now, after a fresh install, you get without any further setup:

- A home page displaying 3 blog posts (not necesarily the last ones...yet)
- A blog list page at `/blog`
- A single post page at `/blog/{id}/{slug}`
- Every page you create will be accessible at `/{slug}`


Explaination:


Every page type (page, blog, blog post and home) has a specific template associated. See `src/Templates`.
It contains the logic to "prepare" the views (ie: load 3 blog post for the home page)
You can replace them or create your own, by overwriting the config files `bow.php` in the main config folder.
Once you are done, you will need to add it to the list of available pages in voyager > tool > database > page > edit > template. And edit the template for for that specific page (this will be automated soon).
All the views are editable under `resources/views/vendor/bow` in your project once you have followed the install process.


## Install

Via Composer

This is a early version, it requires a change in the minimum stability in composer:

``` json
...
"minimum-stability": "dev",
...
```

``` bash
$ composer require zelf/bow
```

## Usage
Add the Bow service provider to the `config/app.php` file in the `providers` array right after Voyager's:

```php
'providers' => [
    // Laravel Framework Service Providers...
    //...

    // Package Service Providers
    TCG\Voyager\VoyagerServiceProvider::class,
    Zelf\Bow\Providers\BowServiceProvider::class,
    // ...

    // Application Service Providers
    // ...
],
```
Then run the following commands:

``` php

php artisan voyager:install --with-dummy
or
php artisan voyager:install

php artisan vendor:publish --tag=bow

composer dump-autoload

php artisan migrate
php artisan db:seed --class=BowDatabaseSeeder
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

When I do write any :D

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email zelfweb@use.startmail.com instead of using the issue tracker.

## Credits

- [Zelf][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/zelf/bow.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/zelf/bow/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/zelf/bow.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/zelf/bow.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/zelf/bow.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/zelf/bow
[link-travis]: https://travis-ci.org/zelf/bow
[link-scrutinizer]: https://scrutinizer-ci.com/g/zelf/bow/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/zelf/bow
[link-downloads]: https://packagist.org/packages/zelf/bow
[link-author]: https://github.com/zelf
[link-contributors]: ../../contributors
[link-voyager]: https://the-control-group.github.io/voyager/
[link-tutplus-video]: https://code.tutsplus.com/courses/build-a-cms-with-laravel
