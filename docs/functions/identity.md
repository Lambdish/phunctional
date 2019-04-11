# identity

## Description

Is a function which return the same value that is passed as argument.

## Parameters

<dl>
  <dt>value</dt>
  <dd>Any type of value that will be returned</dd>
</dl>

## Examples

Do you want to check if an array of boolean has a false value value:

```php
<?php

use function Lambdish\Phunctional\all;

$values = [true, true, false, true];

all('\Lambdish\Phunctional\identity', $values);

// => false
```
