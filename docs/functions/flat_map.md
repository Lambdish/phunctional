# flat_map

## Description
Returns an array containing the results of applying a given function to the items of a collection and flattening the results.

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to apply to every item in the collection. Must return a array|Traversable|Generator</dd>
  
  <dt>coll</dt>
  <dd>Collection of 1-n dimensions</dd>
</dl>

## Examples

Flat a nested array of numbers:
```php
<?php

use function Lambdish\Phunctional\flat_map;

$range   = [2, 3, 4];

$naturalRange = function ($value): array {
    return range(1, $value);
};

return flat_map($naturalRange, $range);
            
// => [1, 2, 1, 2, 3, 1, 2, 3, 4]
```
