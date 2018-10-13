# pipe

## Description
Takes a set of functions and returns a new one that is the composition of those `$fns`.
The result from the first function execution is piped in to the second function and so on.

It's usually used in combination with the [apply](apply.md) function.

## Parameters

<dl>
  <dt>fns</dt>
  <dd>Functions to be piped.</dd>
</dl>

## Examples

Multiply 2 numbers and divide the result by two:

```php
<?php

use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\pipe;

$multiplier = function ($a, $b) {
    return $a * $b;
};

$byTwoDivider = function ($num) {
    return $num / 2;
};

$calculator = pipe($multiplier, $byTwoDivider);

apply($calculator, [20, 10]);
// => 100
```
