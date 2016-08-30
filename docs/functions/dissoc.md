# dissoc

## Description
Dissociate a value of a key in a collection

Passing a Generator to this function will work but it does not provide any improvement against a simple Traversable

## Parameters

<dl>
  <dt>coll</dt>
  <dd>Collection to dissoc the value of the `$key`.</dd>
  
  <dt>key</dt>
  <dd>Key that the value to be dissoc have.</dd>
</dl>

## Examples

Remove the Pokémon 151 from the list:
```php
<?php

use function Lambdish\Phunctional\dissoc;

$pokemons = [
    1   => 'Bulbasaur',
    2   => 'Ivysaur',
    18  => 'Pidgeot',
    145 => 'Zapdos',
    150 => 'Mewtwo',
    151 => 'Mew',
];

dissoc($pokemons, 151);
// => [
//         1   => 'Bulbasaur',
//         2   => 'Ivysaur',
//         18  => 'Pidgeot',
//         145 => 'Zapdos',
//         150 => 'Mewtwo',
//    ];
```
