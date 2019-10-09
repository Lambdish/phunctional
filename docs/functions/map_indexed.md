# map

## Description
Apply a function over all the items of a collection and returns an array with the results keeping the original indexes.
You can use the `key` as a second argument.

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

use function Lambdish\Phunctional\map_indexed;

return map_indexed(
    static function ($value, $key) {
        return $value * $key;
    }, 
    [1 => 2, 7 => 1, 3 => 5, 4 => 2, 5 => 15]
);

// => [1 => 2, 7 => 7, 3 => 15, 4 => 8, 5 => 75]
```
