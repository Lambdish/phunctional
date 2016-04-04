<img src="https://cloud.githubusercontent.com/assets/1331435/14235438/85de8162-f9fe-11e5-993d-1d32d5213b64.png" align="left" width="192px" height="192px"/>
<img align="left" width="0" height="192px" hspace="10"/>

> Phunctional, because functional programming matters. 

[![Akamon](https://img.shields.io/badge/akamon-phunctional-red.svg?style=flat-square)](http://www.akamon.com) [![MIT License](https://img.shields.io/badge/license-MIT-007EC7.svg?style=flat-square)](http://opensource.org/licenses/MIT) [![Packagist](https://img.shields.io/packagist/v/akamon/phunctional.svg?style=flat-square)](https://github.com/Akamon/phunctional/releases) [![Travis Build Status](http://img.shields.io/travis/oh-my-fish/oh-my-fish.svg?style=flat-square)](https://travis-ci.org/oh-my-fish/oh-my-fish)

Akamon's Phunctional is a set of functions for manage php iterables. It's heavily inspired by Clojure.

<br>
## About

Phunctional is build with some principles in mind:
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
composer require akamon/phunctional
```

## Simple usage
The first is to import every function you're going to use, for example:
```php
use function Akamon\phunctional\map;
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

## Functions documentation
You can find the functions documentation [here](docs/docs.md).

## License
The Phunctional library is licensed under the [MIT license](http://opensource.org/licenses/MIT).
