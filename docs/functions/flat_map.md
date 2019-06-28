# flat_map

## Description
Returns an array containing the results of applying a given function to the items of a collection and flattening the results.

## Parameters

<dl>
  <dt>coll</dt>
  <dd>Collection of multiples dimensions.</dd>
</dl>

## Examples

Flat a nested array of numbers:
```php
<?php

use function Lambdish\Phunctional\flat_map;

$actual   = [2, 3, 4];

$naturalRange = function ($value) {
    return range(1, $value);
};

return flat_map($naturalRange, $actual);
            
// => [1, 2, 1, 2, 3, 1, 2, 3, 4]
```
