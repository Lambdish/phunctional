# search

## Description
Search a value over a collection. Return the first occurrence if found, `$default` if not

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Searcher.</dd>

  <dt>coll</dt>
  <dd>Collection of values to be searched.</dd>

  <dt>default</dt>
  <dd>Value to return if the result is not found.</dd>
</dl>

## Examples

Search for Jorge's table tennis bat:
```php
<?php

use function Lambdish\Phunctional\search;

$bats = [
    [
        'name' => 'Utrastar 5000',
        'owner' => 'Eloi'
    ],
    [
        'name' => 'Functional 1532',
        'owner' => 'Jordi'
    ],
    [
        'name' => 'Fronton 2000',
        'owner' => 'Rafa'
    ],
];

return search(
    function (array $bat) {
        return 'Jorge' === $bat['owner'];
    }, 
    $bats
);
// null
```
