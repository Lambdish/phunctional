# reduce

## Description

Returns the accumulated value of iteratively reduce the collection using a function that receives the accumulated
value and returns a new one in each iteration

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function which reduce the collection calculating the accumulated value.</dd>

  <dt>coll</dt>
  <dd>Collection of values to be reduced by the function.</dd>

  <dt>initial</dt>
  <dd>initial value that will be used as accumulated value for with the first item in the collection.</dd>
</dl>


## Examples

A total amount calculator of a shopping cart:

```php
<?php

use function Lambdish\Phunctional\reduce;

return reduce(
    function ($acc, array $item) {
        return $acc + ($item['quantity'] * $item['price']);
    }, 
    [
        'apple'     => ['quantity' => 2, 'price' => 1.2],
        'orange'    => ['quantity' => 1, 'price' => 3],
        'pineapple' => ['quantity' => 5, 'price' => 1],
    ]
);
            
// => 10.4
```
