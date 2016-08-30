# memoize

## Description
Returns the result of function evaluation for a set of parameters, and then on future function execution with the same arguments the result will be returned from the cache.

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to be executed. Pass null to reset cache</dd>

  <dt>args</dt>
  <dd>Arguments to be passed to the called function.</dd>
</dl>

## Examples

A fibonacci memoized:

```php
<?php

use function Lambdish\Phunctional\memoize;

$memoizedFibonacci = function ($number) use (&$memoizedFibonacci) {
    return $number < 2 ? $number : memoize($memoizedFibonacci, $number - 1) + memoize($memoizedFibonacci, $number - 2);
};

$fibonacci = function ($number) use (&$fibonacci) {
    return $number < 2 ? $number : $fibonacci($number - 1) + $fibonacci($number - 2);
};

$memoizedFibonacci(30);
// => 832040 /74ms

$fibonacci(30);
// => 832040 /3.14s
```
