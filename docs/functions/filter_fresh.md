# filter_fresh

## Description
Iterates over each value in the collection passing them to the callback function. If the callback function returns true,
the current value from collection is returned into the result collection. Keys are not preserved and the new collection starts at 0.

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Filter to apply to every item in the collection.</dd>

  <dt>coll</dt>
  <dd>Collection of values to be filtered.</dd>
</dl>

## Examples

Filter cartoon characters by species:
```php
<?php

use function Lambdish\Phunctional\filter_fresh;

$animals = [
  0 => [ 'name' => 'Jerry',     'species' => 'mouse' ],
  1 => [ 'name' => 'Tweety',    'species' => 'bird' ],
  2 => [ 'name' => 'Tom',       'species' => 'cat' ],
  3 => [ 'name' => 'Sylvester', 'species' => 'cat' ],
];

return filter_fresh(
    static function ($animal) {
        return $animal['species'] === 'cat';
    },
    $animals
);

// => [0 => ['name' => 'Tom', 'species' => 'cat'], 1 => ['name' => 'Sylvester', 'species' => 'cat' ]]
```
