# rest

## Description
Returns the all the elements of a collection except the first preserving the keys

## Parameters

<dl>
  <dt>coll</dt>
  <dd>Collection of values to be returned except the first one.</dd>
</dl>

## Examples

```php
<?php

use function Akamon\Phunctional\rest;

return rest([1, 2, 3, 4, 5]);

// => [1 => 2, 2 => 3, 3 => 4, 4 => 5]
```
