# some

## Description
Check if some value of the collection satisfies the function

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to check if the predicate is true.</dd>

  <dt>coll</dt>
  <dd>Collection of values to check some is true by the `$fn`.</dd>
</dl>

## Examples

Check if some value is bigger than 10:
```php
<?php

use function Lambdish\Phunctional\some;

return some(
    function ($number) {
        return $number > 10;
    }, 
    [1, 4, 3, 9, 5]
);

// false
```
