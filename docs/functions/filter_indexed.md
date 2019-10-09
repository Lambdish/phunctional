# filter

## Description
Iterates over each value in the collection passing them to the callback function. If the callback function returns true,
the current value from collection is returned into the result collection. Keys are preserved. You can use the `key` to
 filter.

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

use function Lambdish\Phunctional\filter_indexed;

return filter_indexed(
    static function ($value, $key) {
        return $key > 10;
    }, 
    [1 => 'hey', 20 => 'yepa', 3 => 'hello', 40 => ':)', 5 => 'smile!']
);
            
// => [20, 40]
```
