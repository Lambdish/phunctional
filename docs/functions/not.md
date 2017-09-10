# not

## Description
Returns the opposite of the `$fn` call

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to return the opposite.</dd>
</dl>

## Examples

Return true if the value is not an array:
```php
<?php

use function Lambdish\Phunctional\not;

$notAnArray = not('is_array');

$notAnArray(123456);            
// => true


$notAnArray(['this is' => 'an array']);            
// => false
```
