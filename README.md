# domain-parser-bundle

[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads](https://poser.pugx.org/egyg33k/domain-parser-bundle/downloads)](https://packagist.org/packages/egyg33k/domain-parser-bundle)
[![Latest Stable Version](https://poser.pugx.org/egyg33k/domain-parser-bundle/v/stable)](https://packagist.org/packages/egyg33k/domain-parser-bundle)


Integration of Domain Parser into Symfony

## System Requirements

You need **PHP >= 5.5.0** but the latest stable version of PHP/HHVM is recommended.

## Install

Via Composer

``` bash
$ composer require egyg33k/domain-parser-bundle

```

## Usage

``` php
        $parser = $this->container->get('egyg33k.domainParser');
        $host = 'http://user:pass@www.pref.okinawa.jp:8080/path/to/page.html?query=string#fragment';
        $url = $parser->parseUrl($host);
        var_dump($url);
```

## Documentation
Original docs https://github.com/jeremykendall/php-domain-parser

## Testing

``` bash
$ phpunit
```

## Security

If you discover any security related issues, please email me@amrsamy.com instead of using the issue tracker.

## Credits

- Amr Samy <me@amrsamy.com>

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-travis]: https://travis-ci.org/EGYG33K/DomainParserBundle.svg?branch=master
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-travis]: https://travis-ci.org/EGYG33K/DomainParserBundle
[link-author]: https://github.com/EGYG33K
