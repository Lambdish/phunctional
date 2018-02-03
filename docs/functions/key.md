# key

## Description
Returns the key of an item value in a collection or a default value in the case it does not exists

## Parameters

<dl>
  <dt>value</dt>
  <dd>Value to search in the collection.</dd>

  <dt>coll</dt>
  <dd>Collection where search the expected value.</dd>

  <dt>default</dt>
  <dd>Default value to return in the case that the value not exists (`null` if not provided).</dd>
</dl>

## Examples

Extract the optional value of a collection:
```php
<?php

use function Lambdish\Phunctional\key;

$map = [
    'discount_1' => 10, 
    'discount_2' => 25,
    'discount_3' => 50,
    'discount_4' => 75,
];

return key(25, $map, 0); 
            
// => discount_2
```
