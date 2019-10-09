# flat_map

## Description
Returns an array containing the results of applying a given function to the items of a collection and flattening the
results. You can use the `key` as a second argument.

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to apply to every item in the collection. Must return a array|Traversable|Generator</dd>
  
  <dt>coll</dt>
  <dd>Collection of 1-n dimensions</dd>
</dl>

## Examples

Create a collection of ranges and flatten the results:
```php
<?php

use function Lambdish\Phunctional\flat_map_indexed;

$range   = [2 => 'some value', 3 => 'some value 2', 4 => 'some value 3'];

$naturalRange = static function ($value, $key): array {
    return range(1, $key);
};

return flat_map_indexed($naturalRange, $range);

// => [1, 2, 1, 2, 3, 1, 2, 3, 4]
```
