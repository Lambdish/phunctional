# butlast

## Description
Returns all the elements of a collection except the last preserving the keys

## Parameters

<dl>
  <dt>coll</dt>
  <dd>Collection of values to be returned except the last one.</dd>
</dl>

## Examples

```php
<?php

use function Lambdish\Phunctional\butlast;

return butlast([1, 2, 3, 4, 5]);

// => [0 => 1, 1 => 2, 2 => 3, 3 => 4]
```
