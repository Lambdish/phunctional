# constant

## Description

Wraps a value into a Closure context.

The result is Closure that returns the same value whenever is called.

## Parameters

<dl>
  <dt>value</dt>
  <dd>Any type value that the Closure will return</dd>
</dl>

## Examples

Given a number return all of its divisors:

```php
<?php

use function Lambdish\Phunctional\map;
use function Lambdish\Phunctional\constant;
 
$numbers = [1,2,3,4,5];

map(constant(0), $numbers);

// => [0,0,0,0,0]
```
