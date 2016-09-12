# reindex

## Description
Returns a new collection with the keys reindexed by `$fn`.
Optionally `$fn` receive the key as the second argument.

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to generate the key.</dd>

  <dt>coll</dt>
  <dd>Collection to be reindexed.</dd>
</dl>

## Examples

Extract the id of the collection and add this as the key:
```php
<?php

use function Lambdish\Phunctional\reindex;

$users = [
    [
        'id'      => 100,
        'name'    => 'Rich',
        'surname' => 'Hickey'
    ],
    [
        'id'      => 22,
        'name'    => 'Kurt',
        'surname' => 'Cobain'
    ],
    [
        'id'      => 12,
        'name'    => 'Gru',
        'surname' => 'Minion'
    ],
];

return reindex(
    function (array $user) {
        return $user['id'];
    }, 
    $users
);
            
// => [
//        100 => [
//            'id'      => 100,
//            'name'    => 'Rich',
//            'surname' => 'Hickey'
//        ],
//        22 => [
//            'id'      => 22,
//            'name'    => 'Kurt',
//            'surname' => 'Cobain'
//        ],
//        12 => [
//            'id'      => 12,
//            'name'    => 'Gru',
//            'surname' => 'Minion'
//        ],
//    ];
```
