# sort

## Description
Sorts a collection using a comparator function

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to compare a couple of elements between them.</dd>

  <dt>coll</dt>
  <dd>Collection of values to be sorted.</dd>
</dl>

## Examples

Sort in ascending order a collection:
```php
<?php

use function Lambdish\Phunctional\sort;

return sort(
    function ($one, $other) {
        return $one === $other ? 0 : ($one > $other ? 1 : -1);
        // In PHP 7 you can use the spaceship operator: $one <=> $other
    }, 
    [9, 1, 2, 3, 4, 1, 5, 6, 7, 4, 9, 8]
);

// [1, 1, 2, 3, 4, 4, 5, 6, 7, 8, 9, 9]
```
