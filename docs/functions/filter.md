# filter

## Description
Iterates over each value in the collection passing them to the callback function. If the callback function returns true,
the current value from collection is returned into the result collection. Keys are preserved. You can use the `key` to filter.

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Filter to apply to every item in the collection.</dd>

  <dt>coll</dt>
  <dd>Collection of values to be filtered.</dd>
</dl>

## Examples

Filter numbers biggers than 10:
```php
<?php

use function Lambdish\Phunctional\filter;

return filter(
    static function ($number) {
        return $number > 10;
    }, 
    [1, 20, 3, 40, 5]
);
            
// => [20, 40]
```
