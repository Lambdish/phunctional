# partition

## Description
Partition an array into arrays with size elements preserving its keys. The last portion may contain less than size elements.

## Parameters

<dl>
  <dt>size</dt>
  <dd>The size of each portion.</dd>
  
  <dt>coll</dt>
  <dd>Coll to be partitioned.</dd>
</dl>

## Examples

Partition an array:
```php
<?php

use function Lambdish\Phunctional\partition;

$coll = [1, 2, 3, 4, 5, 6, 7];

partition(2, $coll);

// => [[0 => 1, 1 => 2], [2 => 3, 3 => 4], [4 => 5, 5 => 6], [6 => 7]]
```
