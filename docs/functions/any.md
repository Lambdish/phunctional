# any

## Description
Check if any value of the collection satisfies the function

This function is an alias for the [some](some.md) function

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to check if the predicate is true.</dd>

  <dt>coll</dt>
  <dd>Collection of values to check any is true by the `$fn`.</dd>
</dl>

## Examples

Check if some value is bigger than 10:
```php
<?php

use function Lambdish\Phunctional\any;

return any(
    function ($number) {
        return $number > 10;
    }, 
    [1, 4, 3, 9, 5]
);

// false
```
