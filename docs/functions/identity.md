# identity

## Description

Identity function is a function which return the same value that is passed as argument. `f(x) = x`

## Parameters

<dl>
  <dt>value</dt>
  <dd>Any type of value that will be returned</dd>
</dl>

## Examples

Do you want to check if an array of booleans has a at least a true value:

```php
<?php

use function Lambdish\Phunctional\any;

$values = [false, false, true, false];

any('Lambdish\Phunctional\identity', $values);

// => true
```
