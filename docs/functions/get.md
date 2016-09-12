# get

## Description
Returns the value of an item in a collection or a default value in the case it does not exists

## Parameters

<dl>
  <dt>key</dt>
  <dd>Key to search in the collection.</dd>

  <dt>coll</dt>
  <dd>Collection where search the expected key.</dd>

  <dt>default</dt>
  <dd>Default value to return in the case that the key not exists (`null` if not provided).</dd>
</dl>

## Examples

Extract the optional value of a collection:
```php
<?php

use function Lambdish\Phunctional\get;

$cart = [
    'price' => 100, 
    'money' => 'EUR',
];

return $cart['price'] - get('discount', $cart, 0); 
            
// => 100
```
