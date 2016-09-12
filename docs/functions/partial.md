# partial

## Description
Fix a number of arguments to a function producing another one with an smaller arity.
If not arguments are present, it returns the same `$fn`

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to be biased.</dd>
  
  <dt>args</dt>
  <dd>Arguments to fix to the function.</dd>
</dl>

## Examples

Add 5 to another number:
```php
<?php

use function Lambdish\Phunctional\partial;

$sum = function($a, $b) {
    return $a + $b;
};

$add5 = partial($sum, 5);

$add5(10);
// => 15

$add5(3);
// => 8
```
