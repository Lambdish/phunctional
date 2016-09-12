# compose

## Description
Takes a set of functions and returns another that is the composition of those `$fns`.
The result of the first function is used as unique argument of the second one and the
result of this for the third function and so on...

It's usually used in combination with [apply](apply.md) function.

## Parameters

<dl>
  <dt>fns</dt>
  <dd>Functions to be composed.</dd>
</dl>

## Examples

Multiply 2 numbers and divide the previous result by two:

```php
<?php

use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\compose;

$multiplier = function ($a, $b) {
    return $a * $b;
};

$byTwoDivider = function ($num) {
    return $num / 2;
};

$calculator = compose($byTwoDivider, $multiplier);

apply($calculator, [20, 10]);
// => 100
```
