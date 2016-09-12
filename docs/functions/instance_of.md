# instance_of

## Description
Returns a checker that validated if an `$element` is an instance of a `$className`

## Parameters

<dl>
  <dt>className</dt>
  <dd>Class name to compare with.</dd>
</dl>

## Examples

Check if all the elements of a collection are instances of a `Exception`
```php
<?php

use function Lambdish\Phunctional\all;
use function Lambdish\Phunctional\instance_of;

$coll = [new Exception(), new InvalidArgumentException(), new Exception()];

return all(instance_of(Exception::class), $coll);

// => true
```
