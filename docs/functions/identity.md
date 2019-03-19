# identity

## Description

It wraps a value into a closure, which return the same value that is passed as argument whenever is called.

## Parameters

<dl>
  <dt>value</dt>
  <dd>Any type of value that will be returned</dd>
</dl>

## Examples

Fill an array with zeros:

```php
<?php

use function Lambdish\Phunctional\map;
use function Lambdish\Phunctional\identity;

$numbers = [1,2,3,4,5];

map(identity(0), $numbers);

// => [0,0,0,0,0]
```
