<img src="https://cloud.githubusercontent.com/assets/1331435/18451701/4888ff86-7938-11e6-8433-1fcaf668a625.jpg" align="left" width="192px" height="192px"/>
<img align="left" width="0" height="192px" hspace="10"/>

> Phunctional, because functional programming matters. 

[![Lambdish](https://img.shields.io/badge/lambdish-phunctional-red.svg?style=flat-square)](https://github.com/Lambdish) [![MIT License](https://img.shields.io/badge/license-MIT-007EC7.svg?style=flat-square)](http://opensource.org/licenses/MIT) [![Version](https://img.shields.io/packagist/v/lambdish/phunctional.svg?style=flat-square)](https://github.com/Lambdish/phunctional/releases) [![Monthly Downloads](https://poser.pugx.org/lambdish/phunctional/d/monthly)](https://packagist.org/packages/lambdish/phunctional) [![Travis Build Status](http://img.shields.io/travis/Lambdish/phunctional.svg?style=flat-square)](https://travis-ci.org/Lambdish/phunctional)

Lambdish's Phunctional is a little library that tries to bring to PHP some aspects of functional programing with __util high order functions__ and __functions for manage iterables__.

<br>

## About

Phunctional is heavily inspired by [Clojure](https://clojure.org/) and some other PHP libraries like [iter](https://github.com/nikic/iter), [compose](https://github.com/igorw/compose) and [felpado](https://github.com/pablodip/felpado).

The main principles that we have in mind developing this library are:
 * A collection can be any iterable PHP object, arrays or generators
 * Favor composition vs inheritance
 * Be lazy when you can
 * Avoid state, state is (usually) evil!
 * Simplicity over easiness
 * Break the above rules if it makes sense

All of this can be resumed with a word: __Immutability__.

## Installation
To install it with composer:
```
composer require lambdish/phunctional
```

## Simple usage
The first is to import every function you're going to use, for example:
```php
use function Lambdish\phunctional\map;
```

And then you'll be able to use it:

```php
map(
    function ($number) {
        return $number + 10;
    },
    [1, 2, 3, 4, 5]
);

// => [11, 12, 13, 14, 15]
```

And do something more complex like:
```php
use function Lambdish\Phunctional\pipe;
use const Lambdish\Phunctional\{filter_null, reverse, first};

$lastNonNullableValue = pipe(filter_null, reverse, first);

$lastNonNullableValue(['first', null, 'other', 'last non nullable', null, null]);

// => "last non nullable"
```
Here we're using the provided constants, that acts like an alias for the functions full qualified namespace
(and therefore, are `callable`).

## Documentation
You can find the functions documentation [here](docs/docs.md).
