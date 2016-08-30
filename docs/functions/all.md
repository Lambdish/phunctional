# all

## Description
Check if all the values of the collection satisfies the function

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to check if the predicate is true.</dd>

  <dt>coll</dt>
  <dd>Collection of values to check all are true by the `$fn`.</dd>
</dl>

## Examples

Check if all the values are bigger than 10:
```php
<?php

use function Lambdish\Phunctional\all;

return all(
    function ($number) {
        return $number > 10;
    }, 
    [9, 40, 30, 90, 50]
);

// false
```
