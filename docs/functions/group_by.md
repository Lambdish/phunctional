# map

## Description
Returns an array with the items grouped by the results of applying $fn to each item.
## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to apply to every item in the collection.</dd>

  <dt>coll</dt>
  <dd>Collection of values to apply the function.</dd>
</dl>

## Examples

Group by string length:
```php
<?php

use function Lambdish\Phunctional\group_by;

return group_by('strlen', ['one', 'two', 'three']);
            
// => [3 => ['one', 'two'], 5 => ['three']]
```
