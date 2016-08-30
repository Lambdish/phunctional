# assoc

## Description
Associate a value to an array

Passing a Generator to this function will work but it does not provide any improvement against a simple Traversable
because to reach the last one is necessary iterate among all the items

## Parameters

<dl>
  <dt>coll</dt>
  <dd>Collection of values to check all are true by the `$fn`.</dd>
  
  <dt>key</dt>
  <dd>Key that the value will have inside the `$coll`.</dd>
  
  <dt>value</dt>
  <dd>The value to associate.</dd>
</dl>

## Examples

Add the Pokémon 151 to the list:
```php
<?php

use function Lambdish\Phunctional\assoc;

$pokemons = [
    1   => 'Bulbasaur',
    2   => 'Ivysaur',
    18  => 'Pidgeot',
    145 => 'Zapdos',
    150 => 'Mewtwo',
];

assoc($pokemons, 151, 'Mew');
// => [
//         1   => 'Bulbasaur',
//         2   => 'Ivysaur',
//         18  => 'Pidgeot',
//         145 => 'Zapdos',
//         150 => 'Mewtwo',
//         151 => 'Mew',
//    ];
```
