# pipe

## Description
Takes a set of functions and returns a new one that is the composition of those `$fns`.
The result from the first function execution is piped in to the second function and so on.

It's usually used in combination with the [call](call.md) function.

## Parameters

<dl>
  <dt>fns</dt>
  <dd>Functions to be piped.</dd>
</dl>

## Examples

Multiply 2 numbers and divide the result by two:

```php
<?php

use function Akamon\Phunctional\pipe;
use function Akamon\Phunctional\call;

$multiplier = function ($a, $b) {
    return $a * $b;
};

$byTwoDivider = function ($num) {
    return $num / 2;
};

$calculator = pipe($multiplier, $byTwoDivider);

call($calculator, [20, 10]);
// => 15
```
