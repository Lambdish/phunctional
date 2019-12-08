# map

## Description
Apply a function over all the items of a collection and returns an array with the results keeping the original indexes.
You can use the `key` as the second argument.

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to apply to every item in the collection.</dd>

  <dt>coll</dt>
  <dd>Collection of values to apply the function.</dd>
</dl>

## Examples

A multiplier:
```php
<?php

use function Lambdish\Phunctional\map;

return map(
    function ($value) {
        return $value * 2;
    }, 
    [1, 2, 3, 4, 5]
);
            
// => [2, 4, 6, 8, 10]
```
