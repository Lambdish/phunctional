# complement

## Description
Takes a `$fn` and returns another one that takes the same arguments and returns the opposite truth value.

This function is an alias for the [not](not.md) function

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to make the complement.</dd>
</dl>

## Examples

Check if a value is not null:
```php
<?php

use function Lambdish\Phunctional\complement;

$isNotNull = complement('is_null');

$value = null;

$isNotNull($value);
// false
```
