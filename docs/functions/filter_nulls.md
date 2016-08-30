# filter_null

## Description
Iterates over each value in the collection. If the current value is not null,
is returned into the result collection. Keys are preserved.

## Parameters

<dl>
  <dt>coll</dt>
  <dd>Collection of values to be filtered.</dd>
</dl>

## Examples

Filter nulls from a collection:
```php
<?php

use function Lambdish\Phunctional\filter_null;

return filter_null(
    [1, null, 20, 3, 40, null, 5]
);
            
// => [1, 20, 3, 40, 5]
```
