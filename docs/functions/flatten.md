# flatten

## Description
Flat a multidimensional collection

## Parameters

<dl>
  <dt>coll</dt>
  <dd>Collection of multiples dimensions.</dd>
</dl>

## Examples

Flat a nested array of numbers:
```php
<?php

use function Lambdish\Phunctional\flatten;

return flatten([1, [2, 3], [4, [5, 6], [[[[[7, 8]]]]]]]);
            
// => [1, 2, 3, 4, 5, 6, 7, 8]
```
