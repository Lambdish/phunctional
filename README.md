# Akamon Phunctional
[![Build Status](https://magnum.travis-ci.com/Akamon/phunctional.svg?token=yPUWx5GE4x5sT2iLErqy)](https://magnum.travis-ci.com/Akamon/phunctional)

Akamon's Phunctional is a set of functions for manage php iterables. It's heavily inspired by Clojure.

Phunctional is build with some principles in mind:
 * A collection can be any iterable PHP object, arrays or generators
 * Favor composition vs inheritance
 * Be lazy when you can
 * Avoid state, state is (usually) evil!
 * Simplicity over easiness
 * Break the above rules if it makes sense

All of this can be resumed with a word: __Immutability__.

### Installation
To install it with composer:
```
composer require akamon/phunctional
```

### Simple usage
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
    [1, 2, 3, 4, 5];
);

// => [11, 12, 13, 14, 15]
```

### Functions documentation
You can find the functions documentation [here](docs/docs.md).

### License
The Phunctional library is licensed under the [MIT license](http://opensource.org/licenses/MIT).
