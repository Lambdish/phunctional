# reverse

## Description

Returns a reversed collection preserving its keys.

Passing a Generator to this function will work but it does not provide any improvement against a simple Traversable
because to reach the last one is necessary iterate among all the items
 
## Parameters

<dl>
  <dt>coll</dt>
  <dd>Collection to be reversed.</dd>
</dl>


## Examples

```php
<?php

use function Lambdish\Phunctional\reverse;

return reverse([1, 2, 3, 4, 5]);
            
// => [4 => 5, 3 => 4, 2 => 3, 1 => 2, 0 => 1]
```
